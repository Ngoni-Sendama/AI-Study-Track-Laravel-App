<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamQuestionResource\Pages;
use App\Filament\Resources\ExamQuestionResource\RelationManagers;
use App\Models\ExamQuestion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamQuestionResource extends Resource
{
    protected static ?string $model = ExamQuestion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('exam_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('question')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('option_a')
                    ->required(),
                Forms\Components\TextInput::make('option_b')
                    ->required(),
                Forms\Components\TextInput::make('option_c')
                    ->required(),
                Forms\Components\TextInput::make('option_d')
                    ->required(),
                Forms\Components\TextInput::make('correct_option')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('exam_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option_a')
                    ->searchable(),
                Tables\Columns\TextColumn::make('option_b')
                    ->searchable(),
                Tables\Columns\TextColumn::make('option_c')
                    ->searchable(),
                Tables\Columns\TextColumn::make('option_d')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correct_option')
                    ->searchable(),
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
            'index' => Pages\ListExamQuestions::route('/'),
            'create' => Pages\CreateExamQuestion::route('/create'),
            'view' => Pages\ViewExamQuestion::route('/{record}'),
            'edit' => Pages\EditExamQuestion::route('/{record}/edit'),
        ];
    }
}
