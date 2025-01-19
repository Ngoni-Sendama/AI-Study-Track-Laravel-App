<?php

namespace App\Http\Controllers;

use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;

class GeminiController extends Controller
{
    
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
