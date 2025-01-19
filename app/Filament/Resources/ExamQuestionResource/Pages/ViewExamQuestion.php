<?php

namespace App\Filament\Resources\ExamQuestionResource\Pages;

use App\Filament\Resources\ExamQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamQuestion extends ViewRecord
{
    protected static string $resource = ExamQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
