<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class MistralController extends Controller
{
    public function askMistral()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . env('MISTRAL_API_KEY'),
        ])->post('https://api.mistral.ai/v1/chat/completions', [
            'model' => 'mistral-large-latest',
            'messages' => [
                ['role' => 'user', 'content' => 'How to be a good laravel developer'],
            ],
        ]);

        if ($response->successful()) {
            $generatedText = $response->json('choices.0.message.content');
            return response()->json(['response' => $generatedText]);
        } else {
            return response()->json([
                'error' => 'Failed to fetch response from Mistral API.',
                'details' => $response->json(),
            ], $response->status());
        }
    }
}
