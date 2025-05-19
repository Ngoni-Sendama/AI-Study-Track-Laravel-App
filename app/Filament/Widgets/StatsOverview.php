<?php

namespace App\Filament\Widgets;

use App\Models\Exam;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static bool $isLazy = false;
    protected static ?int $sort = -2;

    protected ?string $heading = 'Analytics';

    protected ?string $description = 'An overview of some analytics.';

    protected function getStats(): array
    {
        $average = Exam::whereNotNull('marks')->avg('marks');

        return [
            Stat::make('Last Exam Mark', '80%')
                ->description('Next Exam: 22 Apri')
                ->color('danger'),
            Stat::make('Average Exam Mark', number_format($average, 2) . '%'),
            Stat::make('Exams', Exam::count()),
        ];
    }
}
