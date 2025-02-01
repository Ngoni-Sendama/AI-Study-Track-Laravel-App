<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class SyllabusCompletion extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'syllabusCompletion';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Syllabus Completion';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'radialBar',
                'height' => 300,
            ],
            'series' => [75],
            'plotOptions' => [
                'radialBar' => [
                    'hollow' => [
                        'size' => '70%',
                    ],
                    'dataLabels' => [
                        'show' => true,
                        'name' => [
                            'show' => true,
                            'fontFamily' => 'inherit'
                        ],
                        'value' => [
                            'show' => true,
                            'fontFamily' => 'inherit',
                            'fontWeight' => 600,
                            'fontSize' => '20px'
                        ],
                    ],

                ],
            ],
            'stroke' => [
                'lineCap' => 'round',
            ],
            'labels' => ['Syllabus Completion'],
            'colors' => ['#25cc04'],
        ];
    }
}
