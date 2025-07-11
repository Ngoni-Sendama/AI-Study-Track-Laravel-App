<?php

namespace App\Filament\Resources\FlashCardResource\Pages;

use App\Filament\Resources\FlashCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlashCard extends EditRecord
{
    protected static string $resource = FlashCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
