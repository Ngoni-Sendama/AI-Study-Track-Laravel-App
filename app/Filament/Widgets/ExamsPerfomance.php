<?php

namespace App\Filament\Widgets;

use App\Models\Exam;
use Illuminate\Support\Facades\Auth;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class ExamsPerfomance extends ApexChartWidget
{
    protected static ?string $chartId = 'examsPerfomance';
    protected static ?string $heading = 'Your Exam Performance';

    protected function getOptions(): array
    {
        $exams = Exam::query()
            ->where('user_id', Auth::id())
            ->latest()
            ->take(10)
            ->get()
            ->reverse();

        $marks = $exams->pluck('marks')->map(fn($m) => round($m, 2))->toArray();
        $labels = $exams->map(
            fn($exam, $index) =>
                \Illuminate\Support\Str::limit($exam->subject?->name ?? 'Exam ' . ($index + 1), 15)
        )->toArray();

        $hasData = collect($marks)->filter(fn($m) => $m > 0)->isNotEmpty();

        return [
            'chart' => [
                'type' => 'area',
                'height' => 350,
            ],
            'series' => $hasData
                ? [[ 'name' => 'Marks (%)', 'data' => $marks ]]
                : [],
            'xaxis' => [
                'categories' => $labels,
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                    'formatter' => 'function (val) { return val + "%"; }',
                ],
                'max' => 100,
            ],
            'colors' => ['#10b981'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => true,
            ],
            'noData' => [
                'text' => 'No data at the moment.',
                'align' => 'center',
                'verticalAlign' => 'middle',
                'style' => [
                    'fontSize' => '16px',
                    'color' => '#999',
                ],
            ],
        ];
    }
}
