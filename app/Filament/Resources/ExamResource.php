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
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ExamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExamResource\RelationManagers;
use Filament\Actions\Action;

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
                    ->label('generate exam')
                    ->color('info')
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
