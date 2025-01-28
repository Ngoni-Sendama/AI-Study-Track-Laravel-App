<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class OpenController extends Controller
{
    public function subjects()
    {
        $subjects=Subject::where('user_id',2)->get();
        return view('welcome',compact('subjects'));
    }
     // Function to handle OpenAI API request and generate text
     public function generateText(Request $request)
     {
         // Validate the input prompt
         $request->validate([
             'prompt' => 'required|string|max:1000',
         ]);
 
         // Set the OpenAI API endpoint and key from environment variables
         $apiKey = env('OPENAI_API_KEY');
         $url = "https://api.openai.com/v1/chat/completions";
 
         // Prepare the payload for the OpenAI API request
         $data = [
             "model" => "gpt-3.5-turbo",
             "messages" => [
                 [
                     "role" => "system",
                     "content" => "You are a helpful assistant."
                 ],
                 [
                     "role" => "user",
                     "content" => $request->input('prompt')
                 ]
             ]
         ];
 
         // Make the API request to OpenAI
         try {
             $response = Http::withHeaders([
                 'Authorization' => 'Bearer ' . $apiKey,
                 'Content-Type' => 'application/json'
             ])->post($url, $data);
 
             // Check if the request was successful
             if ($response->successful()) {
                 // Extract the response text from the OpenAI response
                 $generatedText = $response->json()['choices'][0]['message']['content'];
 
                 // Redirect back with the generated text
                 return redirect()->route('openai.form')->with('generated_text', $generatedText);
             } else {
                 return redirect()->back()->with('error', 'Failed to generate text: ' . $response->json()['error']['message']);
             }
         } catch (\Exception $e) {
             return redirect()->back()->with('error', 'Error communicating with OpenAI: ' . $e->getMessage());
         }
     }
 
     // Route to show the form
     public function showForm()
     {
         return view('openai');
     }
}
