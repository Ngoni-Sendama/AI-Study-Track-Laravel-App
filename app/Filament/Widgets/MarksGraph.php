<?php

namespace App\Filament\Widgets;

use App\Models\Subject;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class MarksGraph extends ApexChartWidget
{
    protected static ?string $chartId = 'marksGraph';
    protected static ?string $heading = 'Average Marks by Subject';


    protected function getOptions(): array
    {
        $subjects = Subject::where('user_id', Auth::id())->with('exams')->get();

        $labels = [];
        $averages = [];

        foreach ($subjects as $subject) {
            $labels[] = Str::limit($subject->name, 20);
            $average = $subject->exams()->avg('marks');
            $averages[] = round($average ?? 0, 2);
        }

        // Check if there's any actual data
        $hasData = collect($averages)->filter(fn($mark) => $mark > 0)->isNotEmpty();

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => $hasData
                ? [['name' => 'Average Marks (%)', 'data' => $averages]]
                : [],
            'xaxis' => [
                'categories' => $labels,
                'labels' => ['style' => ['fontFamily' => 'inherit']],
            ],
            'yaxis' => [
                'labels' => ['style' => ['fontFamily' => 'inherit']],
                'max' => 100,
            ],
            'colors' => ['#6366f1'],
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
