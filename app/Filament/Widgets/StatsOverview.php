<?php

namespace App\Filament\Widgets;

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
        return [
            Stat::make('Last Exam Mark', '80%')
                ->description('Next Exam: 22 Jan')
                ->color('danger'),
            Stat::make('Average Exam Mark', '90%'),
            Stat::make('Pending Exams', '3/12'),
        ];
    }
}
