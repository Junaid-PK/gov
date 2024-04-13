<?php

namespace App\Filament\Resources\AcceptedFormArrivingsResource\Pages;

use App\Filament\Resources\AcceptedFormArrivingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAcceptedFormArrivings extends ListRecords
{
    protected static string $resource = AcceptedFormArrivingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
