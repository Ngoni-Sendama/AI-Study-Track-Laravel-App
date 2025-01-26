<?php

namespace App\Filament\Resources\ExamResource\Pages;

use App\Models\Exam;
use Filament\Actions;
use App\Models\Subject;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\ExamResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListExams extends ListRecords
{
    protected static string $resource = ExamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $subjects = Subject::all();
        $tabs=[];
        foreach ($subjects as $subject) {
            $tabs[$subject->id] = Tab::make($subject->name) 
                ->badge(fn() => Exam::where('subject_id', $subject->id)->count()) 
                ->modifyQueryUsing(fn(Builder $query) => $query->where('subject_id', $subject->id)); 
        }

        return $tabs;
    }
}
