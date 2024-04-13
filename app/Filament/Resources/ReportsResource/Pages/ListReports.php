<?php

namespace App\Filament\Resources\ReportsResource\Pages;

use App\Filament\Resources\ReportsResource;
use App\Models\FormArriving;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;

class ListReports extends ListRecords
{
    protected static string $resource = ReportsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
            Action::make('exportToPdf')
                ->color('success')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(function () {
                    $data = FormArriving::with(['disembarkations', 'arrivalMean'])->where('accepted', '1')->get();
                    return response()->streamDownload(function () use ($data) {
                        echo Pdf::loadHtml(
                            Blade::render('pdf', ['data' => $data])
                        )->stream();
                    }, \Str::uuid() . '.pdf');
                }),
        ];
    }
}
