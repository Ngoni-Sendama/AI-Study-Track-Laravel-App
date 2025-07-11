<?php

namespace App\Filament\Resources;

use Filament\Forms;
use OpenAI;
use App\Models\FlashCardQuestion;
use Filament\Tables;
use App\Models\Topic;
use App\Models\Subject;
use Filament\Forms\Get;
use Filament\Forms\Form;
use App\Models\FlashCard;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FlashCardResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FlashCardResource\RelationManagers;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;

class FlashCardResource extends Resource
{
    protected static ?string $model = FlashCard::class;

    protected static ?string $navigationIcon = 'hugeicons-cards-02';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        Hidden::make('user_id')
                            ->default(Auth::id()),
                        Forms\Components\Select::make('subject_id')
                            ->required()
                            ->label('Subject')
                            ->live()
                            ->options(Subject::where('user_id', Auth::id())->pluck('name', 'id')),
                        Forms\Components\TextInput::make('name')
                            ->required(),

                        Forms\Components\TagsInput::make('topics')
                            // ->multiple()
                            ->columnSpanFull()
                            ->suggestions(
                                fn(Get $get): Collection => Topic::query()
                                    ->where('subject_id', $get('subject_id'))
                                    ->get()
                                    ->mapWithKeys(fn($topic) => [
                                        $topic->topics => "{$topic->unit} - {$topic->topics}"
                                    ])
                            ),


                            Section::make()
                            ->visibleOn('view')
                            ->schema([
                                Repeater::make('questions')
                                ->relationship('questions')
                                ->schema([
                                           Forms\Components\TextInput::make('question'),
                                           Forms\Components\TextInput::make('answer'),
                                ])

                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),


                Tables\Actions\Action::make('generate')
                    ->label('Generate Flashcards')
                    ->color('success')
                    ->icon('heroicon-o-sparkles')
                    ->requiresConfirmation()
                    ->action(function ($record) {
                        // Prepare prompt based on subject and topics
                        $subject = $record->subject->name;
                        $topics = implode(', ', $record->topics);

                        $prompt = <<<EOT
                            Generate 5 simple flashcard-style questions and answers based on the subject "$subject" and the following topics: $topics.

                            Respond in JSON format like this:
                            [
                            {"question": "...", "answer": "..."},
                            {"question": "...", "answer": "..."},
                            ...
                            ]
                            EOT;

                        // Create OpenAI client
                        $client = OpenAI::client(env('OPENAI_API_KEY'));

                        $response = $client->chat()->create([
                            'model' => 'gpt-3.5-turbo',
                            'messages' => [
                                ['role' => 'system', 'content' => 'You are a helpful AI that generates flashcards.'],
                                ['role' => 'user', 'content' => $prompt],
                            ],
                        ]);

                        // Parse and store the questions
                        $content = $response->choices[0]->message->content;

                        try {
                            $questions = json_decode($content, true);

                            foreach ($questions as $item) {
                                FlashCardQuestion::create([
                                    'flash_card_id' => $record->id,
                                    'question' => $item['question'],
                                    'answer' => $item['answer'],
                                ]);
                            }
                        } catch (\Exception $e) {
                            throw \Filament\Notifications\Notification::make()
                                ->title('Failed to generate flashcards')
                                ->body('The response format may be invalid.')
                                ->danger();
                        }

                        \Filament\Notifications\Notification::make()
                            ->title('Flashcards Generated')
                            ->body('5 flashcard questions have been added.')
                            ->success()
                            ->send();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFlashCards::route('/'),
            'create' => Pages\CreateFlashCard::route('/create'),
            'view' => Pages\ViewFlashCard::route('/{record}'),
            'edit' => Pages\EditFlashCard::route('/{record}/edit'),
        ];
    }
}
