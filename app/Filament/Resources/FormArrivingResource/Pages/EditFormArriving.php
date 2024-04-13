<?php

namespace App\Filament\Resources\FormArrivingResource\Pages;

use App\Filament\Resources\FormArrivingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormArriving extends EditRecord
{
    protected static string $resource = FormArrivingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
