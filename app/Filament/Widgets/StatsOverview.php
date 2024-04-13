<?php

namespace App\Filament\Widgets;

use App\Models\FormArriving;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected function getStats(): array
    {
        $arrivalsToday = FormArriving::whereDate('addedDate', now()->toDateString())->count();
        $arrivalsThisMonth = FormArriving::whereMonth('addedDate', now()->month)->count();
        $arrivalsThisYear = FormArriving::whereYear('addedDate', now()->year)->count();
        $totalArrivals = FormArriving::count();

        $arrivalsTodayData = FormArriving::whereDate('addedDate', now()->toDateString())->pluck('id')->toArray();
        $arrivalsThisMonthData = FormArriving::whereMonth('addedDate', now()->month)->pluck('id')->toArray();
        $arrivalsThisYearData = FormArriving::whereYear('addedDate', now()->year)->pluck('id')->toArray();
        $totalArrivalsData = FormArriving::pluck('id')->toArray();

        $previousTotalCount = FormArriving::whereYear('addedDate', now()->subYear()->year)->count();
        $totalArrivalsIncrease = $totalArrivals > 0 ? (($totalArrivals - $previousTotalCount) / $totalArrivals) * 100 : 0;

        return [
            Stat::make('Arrivals Today', $arrivalsToday)
                ->chart($arrivalsTodayData)
                ->color('warning'),

            Stat::make('Arrivals This Month', $arrivalsThisMonth)
                ->chart($arrivalsThisMonthData),

            Stat::make('Arrivals This Year', $arrivalsThisYear)
                ->chart($arrivalsThisYearData)
                ->color('primary'),


            Stat::make('Total Arrivals', $totalArrivals)
                ->description(sprintf('%.2f%% increase', $totalArrivalsIncrease))
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart($totalArrivalsData)
                ->color('success'),
        ];
    }
}
