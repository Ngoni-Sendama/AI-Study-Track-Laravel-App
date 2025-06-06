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
    protected static bool $isLazy = false;

    protected function getTablePage(): string
    {
        return ListExams::class;  // Specify the page where stats should be displayed.
    }
    protected ?string $heading = 'Your Perfomance Stats';
    
    protected function getStats(): array
    {

        return [
            Stat::make('Total Exams', $this->getPageTableQuery()->count()), // Count of exams
            Stat::make('Average Marks %', intval($this->getPageTableQuery()->avg('marks')))
                ->description('The average mark you have obtained in all exams'), // Average marks as an integer
            Stat::make('Top Scorer %', intval($this->getPageTableQuery()->max('marks')))
                ->description('The top mark you have obtained in all exams'), // Average marks as an integer
            // Max marks scored as an integer
        ];
    }
}
