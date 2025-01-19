<?php

namespace App\Filament\Resources;


use Filament\Forms;
use Filament\Tables;
use App\Models\Subject;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Support\Enums\Alignment;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SubjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Hugomyb\FilamentMediaAction\Tables\Actions\MediaAction;
use App\Filament\Resources\SubjectResource\RelationManagers;
use Joaopaulolndev\FilamentPdfViewer\Forms\Components\PdfViewerField;
use App\Filament\Resources\SubjectResource\RelationManagers\NotesRelationManager;
use App\Filament\Resources\SubjectResource\RelationManagers\TopicsRelationManager;

class SubjectResource extends Resource
{
    protected static ?string $model = Subject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->columnSpanFull()
                    ->disabledOn('edit')
                    ->required(),
                PdfViewerField::make('syllabus')
                    ->label('Syllabus Preview')
                    ->minHeight('70svh')
                    ->columnSpanFull()
                    ->visible((fn($record) => $record->syllabus)),
                Forms\Components\FileUpload::make('syllabus')
                    ->columnSpanFull()
                    ->visibleOn('create')
                    ->preserveFilenames()
                    ->directory('syllabus')
                    ->hidden(fn(Get $get): bool =>  $get('custom_topics')),
                Checkbox::make('custom_topics')
                    ->hint('Add Topics')
                    ->visibleOn('create')
                    ->live(),
                Repeater::make('topics')
                    ->visibleOn('create')
                    ->columnSpanFull()
                    ->columns(2)
                    ->visible(fn(Get $get): bool => $get('custom_topics'))
                    ->relationship()
                    ->schema([
                        Forms\Components\TextInput::make('unit')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('topics'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Stack::make([
                    Tables\Columns\TextColumn::make('name')
                        ->searchable(),

                ]),
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 4,
            ])
            ->filters([
                //
            ])
            ->actions([
                MediaAction::make('syllabus')
                    ->modalHeading(fn($record) => $record->name)
                    ->modalFooterActionsAlignment(Alignment::Center)
                    ->icon('bi-file-earmark-pdf-fill')
                    ->iconButton()
                    ->media(fn($record) => asset('storage/' . $record->syllabus))
                    ->visible((fn($record) => $record->syllabus)),
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
            TopicsRelationManager::class,
            NotesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubjects::route('/'),
            'create' => Pages\CreateSubject::route('/create'),
            'view' => Pages\ViewSubject::route('/{record}'),
            'edit' => Pages\EditSubject::route('/{record}/edit'),
        ];
    }
}
