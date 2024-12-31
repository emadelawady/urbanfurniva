<?php

namespace App\Filament\Resources\OvenResource\Pages;

use App\Filament\Resources\OvenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOven extends EditRecord
{
    protected static string $resource = OvenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف')
                ->slideOver(),
        ];
    }
}
