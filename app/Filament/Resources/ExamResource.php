<?php

namespace App\Filament\Resources;


use Filament\Forms;
use App\Models\Exam;
use App\Models\Note;
use Filament\Tables;
use App\Models\Topic;
use App\Models\Subject;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Novadaemon\FilamentCombobox\Combobox;
use App\Filament\Resources\ExamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExamResource\RelationManagers;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('subject_id')
                    ->required()
                    ->label('Subject')
                    ->live()
                    ->options(Subject::all()->pluck('name', 'id')),
                Combobox::make('topics')
                    ->options(
                        fn(Get $get): Collection => Topic::query()
                            ->where('subject_id', $get('subject_id'))
                            ->get()
                            ->mapWithKeys(fn($topic) => [
                                $topic->topics => "{$topic->unit} - {$topic->topics}"
                            ])
                    )
                    ->preload(),
                Forms\Components\Select::make('topics')
                    ->multiple()
                    ->options(
                        fn(Get $get): Collection => Topic::query()
                            ->where('subject_id', $get('subject_id'))
                            ->get()
                            ->mapWithKeys(fn($topic) => [
                                $topic->topics => "{$topic->unit} - {$topic->topics}"
                            ])
                    )
                    ->preload(),
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
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime()
                    ->since()
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('generate')
                    ->hidden(fn(Exam $record) => $record->questionSets()->exists())
                    ->label('generate exam')
                    ->color('info')
                    ->button()
                    ->icon('heroicon-o-rectangle-stack')
                    ->requiresConfirmation()
                    ->modalHeading('Generate Examination Using AI')
                    ->modalDescription('Are you sure you want to generate the exam?')
                    ->action(function (Exam $record) use ($table) {


                        // if (false === $release) {
                        //     return Notification::make()
                        //         ->title("Error from logs")
                        //         ->danger()
                        //         ->send();
                        // }

                        Notification::make()
                            ->title("Exam has been generated successfully")
                            ->success()
                            ->send();

                        return $table->deferLoading();
                    }),
                Tables\Actions\Action::make('write')
                    ->label('write exam')
                    ->color('warning')
                    ->visible(fn(Exam $record) => $record->questionSets()->exists())
                    ->button(),
                Tables\Actions\Action::make('check')
                    ->label('exam details')
                    ->color('success')
                    ->visible(fn(Exam $record) => $record->answers()->exists())
                    ->button(),
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
            'index' => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'view' => Pages\ViewExam::route('/{record}'),
            'edit' => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}
