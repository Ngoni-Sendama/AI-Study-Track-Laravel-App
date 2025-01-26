<?php

namespace App\Filament\Resources\ExamResource\Pages;

use App\Models\Exam;
use Filament\Actions;
use App\Filament\Resources\ExamResource;
use Filament\Resources\Pages\ViewRecord;

class ViewExam extends ViewRecord
{
    protected static string $resource = ExamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
            ->hidden(fn(Exam $record) => $record->questionSets()->exists()),
        ];
    }
}
