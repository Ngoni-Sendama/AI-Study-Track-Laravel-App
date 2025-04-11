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
            Actions\Action::make('write')
                ->label('Write Exam')
                ->color('warning')
                ->visible(fn(Exam $record) => $record->questionSets()->exists())
                ->hidden(fn(Exam $record) => $record->answers()->exists())
                ->url(fn(Exam $record): string => route('exam-writing', ['exam' => $record->id]))
                ->button(),
            Actions\Action::make('check')
                ->label('exam details')
                ->color('success')
                ->visible(fn(Exam $record) => $record->answers()->exists())
                ->url(fn(Exam $record): string => route('exam-answers', ['examId' => $record->id]))
                ->button(),
           ];
    }
  
}
