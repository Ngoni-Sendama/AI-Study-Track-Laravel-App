<?php

namespace App\Filament\Resources\FlashCardResource\Pages;

use App\Filament\Resources\FlashCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlashCards extends ListRecords
{
    protected static string $resource = FlashCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
