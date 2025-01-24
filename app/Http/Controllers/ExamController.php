<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Topic;
use App\Models\Subject;
use App\Models\Exam;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;
use Psr\Http\Client\ClientInterface;
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
        // Prepare the question prompt to send to Gemini API
        $questionPrompt = "Generate 5 multiple-choice questions with 4 answers (A-D), and provide the correct answer below of {$exam->subject->name}. 
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

        // Log the response text
        if (!empty($responseText)) {
            \Log::info('Generated questions for Exam ID: ' . $exam->id . "\n" . $responseText);
        } else {
            \Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
            return response()->json(['error' => 'Failed to generate questions.'], 500);
        }

        return response()->json(['message' => 'Questions generated successfully!']);
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
