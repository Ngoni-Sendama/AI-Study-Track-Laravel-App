<?php

namespace App\Filament\Resources\SubjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TopicsRelationManager extends RelationManager
{
    protected static string $relationship = 'topics';
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('unit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('topics')
                    ->columnSpanFull(),
            ]);
    }
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('unit')
            ->columns([
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\TextColumn::make('topics')
                    ->wrap(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
