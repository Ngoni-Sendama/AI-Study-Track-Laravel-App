<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

class FlashCards extends Page
{
    protected static ?string $navigationIcon = 'hugeicons-cards-02';

    protected static string $view = 'filament.pages.flash-cards';
    // protected static bool $shouldRegisterNavigation = false;
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->form([
                TextInput::make('subject')->required(),
                RichEditor::make('body')->required(),
            ]),
        ];
    }
}
