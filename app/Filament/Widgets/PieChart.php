<?php

namespace App\Filament\Widgets;

use App\Models\FormArriving;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class PieChart extends ApexChartWidget
{
    use InteractsWithPageFilters;
    protected static ?int $sort = 1;
    /**
     * Chart Id
     *
     * @var string
     */
    protected static ?string $chartId = 'pieChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Purpose of Arrival Distribution';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        $query = FormArriving::query();

        if ($startDate && $endDate) {
            $startDateParsed = Carbon::parse($startDate);
            $endDateParsed = Carbon::parse($endDate);
            $query->whereBetween('addedDate', [$startDateParsed, $endDateParsed]);
        }

        $counts = $query->selectRaw('SUM(purpBus) as purpBus_count, SUM(purpStudy) as purpStudy_count, SUM(purpCon) as purpCon_count, SUM(purpHon) as purpHon_count, SUM(purpMeet) as purpMeet_count, SUM(purpSport) as purpSport_count, SUM(purpVac) as purpVac_count, SUM(purpVisit) as purpVisit_count, SUM(purpOth) as purpOth_count')
        ->first();


        // Formatting data for the chart
        $series = [
            intval($counts->purpBus_count ?? 0),
            intval($counts->purpStudy_count ?? 0),
            intval($counts->purpCon_count ?? 0),
            intval($counts->purpHon_count ?? 0),
            intval($counts->purpMeet_count ?? 0),
            intval($counts->purpSport_count ?? 0),
            intval($counts->purpVac_count ?? 0),
            intval($counts->purpVisit_count ?? 0),
            intval($counts->purpOth_count ?? 0),
        ];


        $labels = ['Business', 'Study', 'Conference', 'Honeymoon', 'Meeting', 'Sports', 'Vacation', 'Visit', 'Other'];
        return [
            'chart' => [
                'type' => 'pie',
                'height' => 300,
            ],
            'series' => $series,
            'labels' => $labels,
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
