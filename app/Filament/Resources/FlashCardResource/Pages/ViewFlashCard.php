<?php

namespace App\Filament\Resources\FlashCardResource\Pages;

use App\Filament\Resources\FlashCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFlashCard extends ViewRecord
{
    protected static string $resource = FlashCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
