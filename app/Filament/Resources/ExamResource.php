<?php

namespace App\Filament\Resources;


use Filament\Forms;
use App\Models\Exam;
use App\Models\Note;
use Filament\Tables;
use App\Models\Topic;
use GeminiAPI\Client;
use App\Models\Option;
use App\Models\Subject;
use Filament\Forms\Get;
use App\Models\Question;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\QuestionSet;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Hidden;
use Filament\Support\Enums\Alignment;
use GeminiAPI\Resources\Parts\TextPart;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ExamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExamResource\RelationManagers;
use App\Filament\Resources\ExamResource\Widgets\MarksStats;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static ?string $navigationIcon = 'healthicons-o-i-exam-multiple-choice';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Hidden::make('user_id')
                    ->default(Auth::id()),
                Forms\Components\Select::make('subject_id')
                    ->required()
                    ->label('Subject')
                    ->live()
                    ->options(Subject::where('user_id', Auth::id())->pluck('name', 'id')),

                Forms\Components\TagsInput::make('topics')
                    // ->multiple()
                    ->suggestions(
                        fn(Get $get): Collection => Topic::query()
                            ->where('subject_id', $get('subject_id'))
                            ->get()
                            ->mapWithKeys(fn($topic) => [
                                $topic->topics => "{$topic->unit} - {$topic->topics}"
                            ])
                    )
                // ->preload()
                ,
                Forms\Components\Select::make('notes')
                    ->multiple()
                    ->options(
                        fn(Get $get): Collection => Note::query()
                            ->where('subject_id', $get('subject_id'))
                            ->pluck('note_content', 'note_content')
                    ),
                Forms\Components\DateTimePicker::make('date'),
            ]);
    }
   
    public static function generateExamQuestions(Exam $exam): array
    {
        // Prepare the question prompt
        $questionPrompt = "Generate 25 multiple-choice questions with 4 options (A-D). Below each question, include the correct answer in the format: 'Answer: [A-D]'. Please be accurate. Use example below:
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
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . env('GEMINI_API_KEY'), [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $questionPrompt]
                        ]
                    ]
                ]
            ]);

            $responseBody = $response->json();
            $responseText = $responseBody['candidates'][0]['content']['parts'][0]['text'] ?? '';

            if (empty($responseText)) {
                Log::error('Failed to generate questions for Exam ID: ' . $exam->id);
                return ['success' => false, 'message' => 'Failed to generate questions.'];
            }

            Log::info('Generated questions for Exam ID: ' . $exam->id . "\n" . $responseText);

            // Parse the response into questions
            preg_match_all('/\*\*Question (\d+):\*\*\s*(.*?)\s*\(A\)\s*(.*?)\s*\(B\)\s*(.*?)\s*\(C\)\s*(.*?)\s*\(D\)\s*(.*?)\s*\*\*Answer:\s*([A-D])\b/s', $responseText, $matches, PREG_SET_ORDER);

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
            return ['success' => false, 'message' => 'An unexpected error occurred.'];
        }
    }


    public static function generateExamMistral(Exam $exam): array
    {
        // Prepare the question prompt
        $questionPrompt = "Generate 10 multiple-choice questions with 4 options (A-D). Below each question, include the correct answer in the format: 'Answer: [A-D]'. Please be accurate. Use example below:
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
            ])
                ->post('https://api.mistral.ai/v1/chat/completions', [
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
            return ['success' => false, 'message' => 'An unexpected error occurred.'];
        }
    }

    public static function getWidgets(): array
    {
        return [
            MarksStats::class,  // Adding the custom stats widget
        ];
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime()
                    ->since()
                    ->sortable(),
                Tables\Columns\TextColumn::make('marks')
                    ->numeric(decimalPlaces: 0)
                    ->suffix('%')
                    ->getStateUsing(function (Exam $record) {
                        // Return null if marks are not written
                        return $record->marks;
                    })
                    ->color(fn(?string $state): ?string => $state !== null && (float)$state >= 50 ? 'success' : 'danger')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->hidden(fn(Exam $record) => $record->questionSets()->exists()),
                Tables\Actions\EditAction::make()
                    ->hidden(fn(Exam $record) => $record->questionSets()->exists()),
                Tables\Actions\Action::make('generate1')
                    ->hidden(fn(Exam $record) => $record->questionSets()->exists())
                    ->label('Generate Exam Using Gemini')
                    ->color('button1')
                    ->link()
                    ->modalIcon('heroicon-o-check-badge')
                    ->modalIconColor('success')
                    ->requiresConfirmation()
                    ->modalHeading('Generate Examination Using Gemini AI')
                    ->modalDescription('Are you sure you are satisfied with chosen topics and notes, want to generate the exam?')
                    ->modalSubmitActionLabel('Yes, Generate')
                    ->action(function (Exam $record) use ($table) {
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
                        return $table->deferLoading();
                    }),
                Tables\Actions\Action::make('generate')
                    ->hidden(fn(Exam $record) => $record->questionSets()->exists())
                    ->label('Generate exam using Mistral')
                    ->color('info')
                    ->link()
                    ->modalIcon('heroicon-o-check-badge')
                    ->modalIconColor('warning')
                    ->requiresConfirmation()
                    ->modalHeading('Generate Examination Using Mistral AI')
                    ->modalDescription('Are you sure you are satisfied with chosen topics and notes, want to generate the exam?')
                    ->modalSubmitActionLabel('Yes, Generate')
                    ->action(function (Exam $record) use ($table) {
                        try {
                            $result = self::generateExamMistral($record);

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
                        return $table->deferLoading();
                    }),
                Tables\Actions\Action::make('write')
                    ->label('Write Exam')
                    ->color('warning')
                    ->visible(fn(Exam $record) => $record->questionSets()->exists())
                    ->hidden(fn(Exam $record) => $record->answers()->exists())
                    ->url(fn(Exam $record): string => route('exam-writing', ['exam' => $record->id]))
                    ->button(),
                Tables\Actions\Action::make('check')
                    ->label('exam details')
                    ->color('success')
                    ->visible(fn(Exam $record) => $record->answers()->exists())
                    ->url(fn(Exam $record): string => route('exam-answers', ['examId' => $record->id]))
                    ->link(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'view' => Pages\ViewExam::route('/{record}'),
            'edit' => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}
