<?php

namespace App\Filament\Resources\ExamResource\Pages;

use App\Models\Exam;
use Filament\Actions;
use GeminiAPI\Client;
use Illuminate\Support\Facades\Http;
use App\Models\Option;
use App\Models\Question;
use App\Models\QuestionSet;
use Illuminate\Support\Facades\Log;
use GeminiAPI\Resources\Parts\TextPart;
use App\Filament\Resources\ExamResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewExam extends ViewRecord
{
    protected static string $resource = ExamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->hidden(fn(Exam $record) => $record->questionSets()->exists()),
            Actions\Action::make('write')
                ->label('Write Exam')
                ->color('warning')
                ->visible(fn(Exam $record) => $record->questionSets()->exists())
                ->hidden(fn(Exam $record) => $record->answers()->exists())
                ->url(fn(Exam $record): string => route('exam-writing', ['exam' => $record->id]))
                ->button(),
            Actions\Action::make('check')
                ->label('exam details')
                ->color('success')
                ->visible(fn(Exam $record) => $record->answers()->exists())
                ->url(fn(Exam $record): string => route('exam-answers', ['examId' => $record->id]))
                ->button(),
            Actions\Action::make('generate')
                ->hidden(fn(Exam $record) => $record->questionSets()->exists())
                ->label('Generate exam')
                ->color('info')
                ->button()
                ->modalIcon('heroicon-o-check-badge')
                ->modalIconColor('success')
                ->requiresConfirmation()
                ->modalHeading('Generate Examination Using AI')
                ->modalDescription('Are you sure you want to generate the exam?')
                ->modalSubmitActionLabel('Yes, Generate')
                ->action(function (Exam $record) {
                    try {
                        $result = self::generateExamQuestions($record);

                        if (!$result['success']) {
                            Notification::make()
                                ->title('Error')
                                ->body($result['message'])
                                ->danger()
                                ->send();
                            return;
                        }

                        Notification::make()
                            ->title('Success')
                            ->body('Exam has been generated successfully!')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        Log::error('Error generating exam: ' . $e->getMessage());
                        Notification::make()
                            ->title('Error')
                            ->body('An unexpected error occurred while generating the exam.')
                            ->danger()
                            ->send();
                    }
                }),

        ];
    }

    public static function generateExamQuestions(Exam $exam): array
    {
        // Prepare the question prompt
        $questionPrompt = "Generate 20 multiple-choice questions with 4 options (A-D). Below each question, include the correct answer in the format: 'Answer: [A-D]'. Please be accurate. Use example below:
        **Question 5:**
            Iterative development involves:
            (A) Releasing a complete software product before testing
            (B) Incremental development and feedback loops
            (C) Developing a detailed plan before any coding
            (D) Using a single coding language
        **Answer: B (Explain why answer is this option) Please validate the answers**  

        Use the following topics: " . implode(', ', $exam->topics) .
            (!empty($exam->notes) ? ' and refer to the notes: ' . implode(', ', $exam->notes) : '');

        try {
            // Make a request to the Mistral API
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . env('MISTRAL_API_KEY'),
            ])->post('https://api.mistral.ai/v1/chat/completions', [
                'model' => 'mistral-large-latest',
                'messages' => [
                    ['role' => 'user', 'content' => $questionPrompt],
                ],
            ]);

            if (!$response->successful()) {
                Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
                return ['success' => false, 'message' => 'Failed to generate questions.'];
            }

            $responseText = $response->json('choices.0.message.content');

            if (empty($responseText)) {
                Log::error('Empty response from Mistral API for Exam ID: ' . $exam->id);
                return ['success' => false, 'message' => 'Failed to generate questions.'];
            }

            Log::info('Generated questions for Exam ID: ' . $exam->id . "\n" . $responseText);

            // Parse the response into questions
            preg_match_all('/\*\*Question (\d+):\*\*\s*(.*?)\s*\(A\)\s*(.*?)\s*\(B\)\s*(.*?)\s*\(C\)\s*(.*?)\s*\(D\)\s*(.*?)\s*\*\*Answer:\s*([A-D])\*\*/s', $responseText, $matches, PREG_SET_ORDER);

            if (empty($matches)) {
                Log::error('Failed to parse questions or answers from response text.');
                return ['success' => false, 'message' => 'Failed to parse questions or answers.'];
            }

            // Create a new question set
            $questionSet = QuestionSet::create(['exam_id' => $exam->id]);

            foreach ($matches as $match) {
                list($fullMatch, $questionNumber, $questionText, $optionA, $optionB, $optionC, $optionD, $correctAnswer) = $match;

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
            }

            return ['success' => true, 'message' => 'Questions generated and stored successfully!'];
        } catch (\Exception $e) {
            Log::error('Error generating exam: ' . $e->getMessage());
            return ['success' => false, 'message' => 'An unexpected error occurred. Try Again later.'];
        }
    }


    // public static function generateExamQuestions(Exam $exam): array
    // {
    //     // Prepare the question prompt
    //     $questionPrompt = "Generate 5 multiple-choice questions with 4 options (A-D). Below each question, include the correct answer in the format: 'Answer: [A-D]'. Please be accurate.  Use example below:
    //         **Question 5:**
    //             Iterative development involves:
    //             (A) Releasing a complete software product before testing
    //             (B) Incremental development and feedback loops
    //             (C) Developing a detailed plan before any coding
    //             (D) Using a single coding language
    //             **Answer: B (Explain why answer is this option) Please validate the answers**  

    //         Use the following topics: " . implode(', ', $exam->topics) .
    //         (!empty($exam->notes) ? ' and refer to the notes: ' . implode(', ', $exam->notes) : '');

    //     try {
    //         // Initialize the Gemini API client
    //         $client = new Client(env('GEMINI_API_KEY'));

    //         // Request questions from the Gemini API
    //         $response = $client->geminiPro()->generateContent(
    //             new TextPart($questionPrompt)
    //         );

    //         $responseText = $response->text();

    //         if (empty($responseText)) {
    //             Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
    //             return ['success' => false, 'message' => 'Failed to generate questions.'];
    //         }

    //         Log::info('Generated questions for Exam ID: ' . $exam->id . "\n" . $responseText);

    //         // Parse the response into questions
    //         preg_match_all('/\*\*Question (\d+):\*\*\s*(.*?)\s*\(A\)\s*(.*?)\s*\(B\)\s*(.*?)\s*\(C\)\s*(.*?)\s*\(D\)\s*(.*?)\s*\*\*Answer:\s*([A-D])\*\*/s', $responseText, $matches, PREG_SET_ORDER);

    //         if (empty($matches)) {
    //             Log::error('Failed to parse questions or answers from response text.');
    //             return ['success' => false, 'message' => 'Failed to parse questions or answers.'];
    //         }

    //         // Create a new question set
    //         $questionSet = QuestionSet::create(['exam_id' => $exam->id]);

    //         foreach ($matches as $match) {
    //             list($fullMatch, $questionNumber, $questionText, $optionA, $optionB, $optionC, $optionD, $correctAnswer) = $match;

    //             // Create question record
    //             $newQuestion = Question::create([
    //                 'question_set_id' => $questionSet->id,
    //                 'question_text' => $questionText,
    //                 'correct_answer' => $correctAnswer,
    //             ]);

    //             // Store options
    //             $options = [
    //                 'A' => $optionA,
    //                 'B' => $optionB,
    //                 'C' => $optionC,
    //                 'D' => $optionD
    //             ];

    //             foreach ($options as $optionKey => $optionText) {
    //                 Option::create([
    //                     'question_id' => $newQuestion->id,
    //                     'option_text' => $optionText,
    //                     'is_correct' => ($optionKey === $correctAnswer) ? 1 : 0,
    //                 ]);
    //             }
    //         }

    //         return ['success' => true, 'message' => 'Questions generated and stored successfully!'];
    //     } catch (\Exception $e) {
    //         Log::error('Error generating exam: ' . $e->getMessage());
    //         return ['success' => false, 'message' => 'An unexpected error occurred.'];
    //     }
    // }
}
