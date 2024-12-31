<?php

namespace App\Filament\Resources\BurnerGasResource\Pages;

use App\Filament\Resources\BurnerGasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBurnerGas extends EditRecord
{
    protected static string $resource = BurnerGasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver()
                ->label('حذف'),
        ];
    }
}
