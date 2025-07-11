<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Http;

class ExplainQuestion extends Component
{
     public Question $question;
    public $explanation = null;
    public $loading = false;

    public function getExplanation()
    {
        $this->loading = true;

        $prompt = "Explain this multiple choice question and answer briefly (under 100 words) and which topic and book names I can get this information with some sources examples. Question: {$this->question->question_text}";

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ])
            ->timeout(30)
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'max_tokens' => 100,
                'temperature' => 0.5,
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $prompt,
                    ],
                ],
            ]);

            $this->explanation = trim($response->json('choices.0.message.content'));
        } catch (\Exception $e) {
            $this->explanation = "❌ Failed to get explanation.";
        }

        $this->loading = false;
    }


    public function render()
    {
        return view('livewire.explain-question');
    }
}
