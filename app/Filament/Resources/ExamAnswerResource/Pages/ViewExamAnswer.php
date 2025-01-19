<?php

namespace App\Filament\Resources\ExamAnswerResource\Pages;

use App\Filament\Resources\ExamAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewExamAnswer extends ViewRecord
{
    protected static string $resource = ExamAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
