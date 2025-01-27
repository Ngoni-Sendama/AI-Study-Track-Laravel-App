<?php

namespace App\Filament\Resources\ExamResource\Pages;

use App\Models\Exam;
use Filament\Actions;
use App\Models\Subject;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\ExamResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use App\Filament\Resources\ExamResource\Widgets\MarksStats;
use Illuminate\Support\Facades\Auth;

class ListExams extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = ExamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeaderWidgets(): array
    {
        return [
            MarksStats::class, 
        ];
    }

    public function getTabs(): array
    {
        $subjects = Subject::where('user_id',Auth::id());
        $tabs=[];
        foreach ($subjects as $subject) {
            $tabs[$subject->id] = Tab::make($subject->name) 
                ->badge(fn() => Exam::where('subject_id', $subject->id)->where('user_id', Auth::id())->count()) 
                ->modifyQueryUsing(fn(Builder $query) => $query->where('subject_id', $subject->id)->where('user_id',Auth::id())); 
        }

        return $tabs;
    }
}
