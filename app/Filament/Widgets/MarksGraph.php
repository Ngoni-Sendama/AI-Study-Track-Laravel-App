<?php

namespace App\Filament\Widgets;

use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class MarksGraph extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'marksGraph';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Average Marks Graph';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $subjects = Subject::where('user_id', Auth::id())->pluck('name');
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'MarksGraph',
                    'data' => [60, 40, 40, 76, 30],
                ],
            ],
            'xaxis' => [
                'categories' =>  ['CAP 486', 'CAP 314' ,'MKT 201', 'CAP 663', 'PEA 204'],
                // 'categories' =>  $subjects->toArray(),
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
                ],
            ],
            'colors' => ['#f59e0b'],
        ];
    }
}
