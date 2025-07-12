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
            Stat::make('Last Exam Mark', function () {
                $lastExam = Exam::where('user_id', auth()->id())
                    ->latest('date') // or use 'created_at' if 'date' is nullable
                    ->first();

                return $lastExam ? round($lastExam->marks) . '%' : 'No Data';
            })
                ->description('Most recent exam performance')
                ->color('success')
                ,
            Stat::make('Average Exam Mark', number_format($average, 2) . '%'),
            Stat::make('Exams', Exam::count()),
        ];
    }
}
