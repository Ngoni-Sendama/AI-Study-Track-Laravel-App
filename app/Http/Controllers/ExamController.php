<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Topic;
use App\Models\Subject;
use App\Models\Exam;
use App\Models\ExamQuestion;
use App\Models\ExamAnswer;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;

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
        // Prepare the question prompt to send to Gemini API
        $questionPrompt = "Generate 20 multiple-choice questions with 4 answers (A-D), and provide the correct answer below of {$exam->subject->name}. 
        Use the following topics: " . implode(', ', $exam->topics) . 
        (!empty($exam->notes) ? ' and refer to the notes: ' . implode(', ', $exam->notes) : '');

        // Initialize the Gemini API client
        $client = new Client(env('GEMINI_API_KEY'));

        // Request questions from the Gemini API
        $response = $client->geminiPro()->generateContent(
            new TextPart($questionPrompt)
        );

        // Extract the questions and answers from the response
        $responseText = $response->text();

        // If the response text is empty or invalid, return an error
        if (empty($responseText)) {
            \Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
            return response()->json(['error' => 'Failed to generate questions.'], 500);
        }

        // Parse and store the questions and answers
        $this->parseAndStoreQuestions($exam, $responseText);

        return response()->json(['message' => 'Questions generated successfully!']);
    }

    /**
     * Parse and store the questions and answers in the database.
     *
     * @param  \App\Models\Exam  $exam
     * @param  string  $responseText
     * @return void
     */
    private function parseAndStoreQuestions(Exam $exam, $responseText)
    {
        // Assuming the response contains questions in the format as provided in your example
        $questions = explode("\n", $responseText);
        
        foreach ($questions as $questionText) {
            // You may need to adjust parsing depending on the exact format of the response
            if (preg_match('/^(\d+\.)\s*(.*?)\s*Answer: ([A-D])$/', $questionText, $matches)) {
                $questionText = $matches[2];
                $correctOption = $matches[3];

                // Save the question
                $examQuestion = ExamQuestion::create([
                    'exam_id' => $exam->id,
                    'question' => $questionText,
                    'option_a' => '', // Add logic for options if available
                    'option_b' => '',
                    'option_c' => '',
                    'option_d' => '',
                    'correct_option' => $correctOption,
                ]);

                // Store the correct answer
                ExamAnswer::create([
                    'exam_question_id' => $examQuestion->id,
                    'answer' => $correctOption,
                ]);
            }
        }
    }

    public function index()
    {
        $subjects = Subject::with('topics')->get();
        return view('study.select', compact('subjects'));
    }

    public function getTopicsAndNotesBySubject(Request $request)
    {
        $subjectId = $request->input('subject_id');
        $topics = Topic::where('subject_id', $subjectId)->get();
        $notes = Note::where('subject_id', $subjectId)->get();

        return response()->json([
            'topics' => $topics,
            'notes' => $notes,
        ]);
    }
}
