<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use GeminiAPI\Client;
use App\Models\ExamAnswer;
use App\Models\ExamQuestion;
use Illuminate\Http\Request;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;

class GeminiController extends Controller
{
    /**
     * Generate Questions for an Existing Exam
     */
    // public function generateExamQuestions(Exam $exam)
    // {
    //     // Combine the topics and notes into the question
    //     $questionPrompt = "Generate 20 multiple-choice questions with 4 answers (A-D), and provide the correct answer below of {$exam->subject->name}. 
    //     Use the following topics: " . implode(', ', $exam->topics) .
    //         (!empty($exam->notes) ? ' and refer to the notes: ' . implode(', ', $exam->notes) : '');

    //     // Initialize the Gemini API client
    //     $client = new Client(env('GEMINI_API_KEY'));

    //     // Request questions from the Gemini API
    //     $response = $client->geminiPro()->generateContent(
    //         new TextPart($questionPrompt)
    //     );

    //     // If the API request fails, log and return
    //     if ($response->failed()) {
    //         \Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
    //         return response()->json(['error' => 'Failed to generate questions.'], 500);
    //     }

    //     // Parse and store the questions
    //     $this->parseAndStoreQuestions($exam, $response->text());

    //     return response()->json(['message' => 'Questions generated successfully!']);
    // }


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

        // If the API request fails, log and return error
        if ($response->failed()) {
            \Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
            return response()->json(['error' => 'Failed to generate questions.'], 500);
        }

        // Extract the questions and answers from the response
        $this->parseAndStoreQuestions($exam, $response->text());

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
    // used on test
    public function index(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);
        $question = $request->question;
        // Initialize the Gemini API client with the API key from the .env file
        $client = new Client(env('GEMINI_API_KEY'));
        // Use the Gemini API to generate a response for the question
        $response = $client->geminiPro()->generateContent(
            new TextPart($question),
        );
        // Extract the answer from the API response
        $answer = $response->text();
        // Return the question and the generated answer as a JSON response
        return response()->json(['question' => $question, 'answer' => $answer]);
    }

    // Function to handle basic text generation
    public function generateText(Request $request)
    {
        // Validate the input
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        // Ensure the API key is provided and valid
        $apiKey = env('GEMINI_API_KEY');
        if (!$apiKey) {
            return redirect()->back()->with('error', 'API key is missing.');
        }

        try {
            // Initialize the Gemini API client with your API key
            $client = new Client($apiKey);

            // Request text generation with Gemini Pro model
            $response = $client->generativeModel(ModelName::GEMINI_PRO)->generateContent(
                new TextPart($request->input('text'))
            );

            // Store the generated text in the session to display on the page
            return redirect()->route('home')->with('generated_text', $response->text());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to generate text: ' . $e->getMessage());
        }
    }
}
