<?php

namespace App\Filament\Resources\ExamResource\Widgets;

use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use App\Filament\Resources\ExamResource\Pages\ListExams;

class MarksStats extends BaseWidget
{
    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListExams::class;  // Specify the page where stats should be displayed.
    }

    protected function getStats(): array
    {
        // Ensure values are rounded or cast to integers
        return [
            Stat::make('Total Exams', $this->getPageTableQuery()->count()), // Count of exams
            Stat::make('Average Marks %', intval($this->getPageTableQuery()->avg('marks'))), // Average marks as an integer
            Stat::make('Top Scorer %', intval($this->getPageTableQuery()->max('marks'))), // Max marks scored as an integer
        ];
    }
    
}
