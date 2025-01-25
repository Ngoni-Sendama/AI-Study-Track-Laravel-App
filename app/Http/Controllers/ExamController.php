<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Note;
use App\Models\Topic;
use GeminiAPI\Client;
use App\Models\Option;
use App\Models\Subject;
use App\Models\Question;
use App\Models\ExamAnswer;
use App\Models\QuestionSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psr\Http\Client\ClientInterface;
use GeminiAPI\Resources\Parts\TextPart;
use Psr\Http\Client\ClientFactoryInterface;

class ExamController extends Controller
{
    /**
     * Generate exam questions using the Gemini API.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\JsonResponse
     */
    public function generateExamQuestions(Exam $exam)
    {
        // Prepare the question prompt
        $questionPrompt = "Generate 5 multiple-choice questions with 4 options (A-D). Below each question, include the correct answer in the format: 'Answer: [A-D]'.  Use example below:
            **Question 5:**
                Iterative development involves:
                (A) Releasing a complete software product before testing
                (B) Incremental development and feedback loops
                (C) Developing a detailed plan before any coding
                (D) Using a single coding language
                **Answer: B**  
            Use the following topics: " . implode(', ', $exam->topics) .
            (!empty($exam->notes) ? ' and refer to the notes: ' . implode(', ', $exam->notes) : '');

        // Initialize the Gemini API client
        $client = new Client(env('GEMINI_API_KEY'));

        // Request questions from the Gemini API
        $response = $client->geminiPro()->generateContent(
            new TextPart($questionPrompt)
        );

        $responseText = $response->text();

        // Log the response text
        if (empty($responseText)) {
            \Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
            return response()->json(['error' => 'Failed to generate questions.'], 500);
        }
        \Log::info('Generated questions for Exam ID: ' . $exam->id . "\n" . $responseText);

        // Split questions and answers using the updated format
        preg_match_all('/\*\*Question (\d+):\*\*\s*(.*?)\s*\(A\)\s*(.*?)\s*\(B\)\s*(.*?)\s*\(C\)\s*(.*?)\s*\(D\)\s*(.*?)\s*\*\*Answer:\s*([A-D])\*\*/s', $responseText, $matches, PREG_SET_ORDER);

        if (empty($matches)) {
            \Log::error('Failed to parse questions or answers from response text.');
            return response()->json(['error' => 'Failed to parse questions or answers.'], 500);
        }

        // Create a new question set for the exam
        $questionSet = QuestionSet::create(['exam_id' => $exam->id]);

        foreach ($matches as $match) {
            // Extract question and options
            list($fullMatch, $questionNumber, $questionText, $optionA, $optionB, $optionC, $optionD, $correctAnswer) = $match;

            try {
                // Create question record
                $newQuestion = Question::create([
                    'question_set_id' => $questionSet->id,
                    'question_text' => $questionText,
                    'correct_answer' => $correctAnswer,
                ]);

                // Store options
                $options = [
                    'A' => $optionA,
                    'B' => $optionB,
                    'C' => $optionC,
                    'D' => $optionD
                ];

                foreach ($options as $optionKey => $optionText) {
                    Option::create([
                        'question_id' => $newQuestion->id,
                        'option_text' => $optionText,
                        'is_correct' => ($optionKey === $correctAnswer) ? 1 : 0,
                    ]);
                }
            } catch (\Exception $e) {
                \Log::error("Error processing question {$questionNumber} for Exam ID: {$exam->id}: " . $e->getMessage());
                continue;
            }
        }

        return response()->json(['message' => 'Questions generated and stored successfully!']);
    }

    public function showExam($id)
    {
        $exam = Exam::with('questionSets.questions.options')->findOrFail($id);
        // dd($exam); // To inspect the data
        return view('exam', compact('exam'));
    }

    public function practise($id)
    {
        $exam = Exam::with('questionSets.questions.options')->findOrFail($id);
        return view('exam', compact('exam'));
    }

    public function submitExam(Request $request, $examId)
    {
        $exam = Exam::findOrFail($examId);
        $userId = Auth::id();

        $correctAnswers = 0;
        $totalQuestions = 0;

        foreach ($exam->questionSets as $questionSet) {
            foreach ($questionSet->questions as $question) {
                $selectedOptionId = $request->input("question_{$question->id}");

                if ($selectedOptionId) {
                    $totalQuestions++;

                    // Find the selected option
                    $option = $question->options()->find($selectedOptionId);

                    // Check if the selected option is correct
                    $isCorrect = $option && $option->is_correct;

                    // Store the answer in the database
                    ExamAnswer::create([
                        'user_id' => $userId,
                        'exam_id' => $examId,
                        'question_id' => $question->id,
                        'option_id' => $selectedOptionId,
                        'is_correct' => $isCorrect,
                    ]);

                    // Count the correct answers
                    if ($isCorrect) {
                        $correctAnswers++;
                    }
                }
            }
        }

        // Calculate the score percentage
        $score = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;

        return redirect()->route('exams.index')->with('success', "Your exam was submitted. You scored {$score}%.");
    } 

    public function index()
    {

        return view('exam.results');
    }
}
