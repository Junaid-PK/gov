<?php

namespace App\Filament\Resources\AcceptedFormArrivingsResource\Pages;

use App\Filament\Resources\AcceptedFormArrivingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcceptedFormArrivings extends EditRecord
{
    protected static string $resource = AcceptedFormArrivingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
