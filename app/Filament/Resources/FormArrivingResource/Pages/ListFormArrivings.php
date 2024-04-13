<?php

namespace App\Filament\Resources\FormArrivingResource\Pages;

use App\Filament\Resources\FormArrivingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormArrivings extends ListRecords
{
    protected static string $resource = FormArrivingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
