<?php

namespace App\Filament\Resources;

use Filament\Forms;
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
                ->color('success')
                ->action(),
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
