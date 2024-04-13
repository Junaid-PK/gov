<?php

namespace App\Filament\Widgets;

use App\Models\ArrivalMean;
use App\Models\RefArrivalMeans;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BarChart extends ApexChartWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 2;
    protected static ?string $chartId = 'barChart';
    protected static ?string $heading = 'Bar Chart';

    protected function getOptions(): array
    {
        $startDate = isset($this->filters['startDate']) ? Carbon::parse($this->filters['startDate']) : null;
        $endDate = isset($this->filters['endDate']) ? Carbon::parse($this->filters['endDate']) : null;

        // Query to get the counts of people by arrival means
        $query = ArrivalMean::query();

        if ($startDate && $endDate) {
            $query->whereHas('formArriving', function ($query) use ($startDate, $endDate) {
                $query->whereBetween('addedDate', [$startDate, $endDate]);
            });
        }

        $counts = $query->withCount('formArriving')
            ->orderBy('arrivingBY')
            ->pluck('form_arriving_count')
            ->toArray();

        // Get the arrival means labels
        $labels = ArrivalMean::pluck('arrivingBY')->toArray();

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Arrival Means',
                    'data' => $counts,
                ],
            ],
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
                ],
            ],
            'colors' => ['#f59e0b'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 3,
                    'horizontal' => false,
                ],
            ],
        ];
    }
}
