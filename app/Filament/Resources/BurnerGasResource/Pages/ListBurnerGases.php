<?php

namespace App\Filament\Resources\BurnerGasResource\Pages;

use App\Filament\Resources\BurnerGasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBurnerGases extends ListRecords
{
    protected static string $resource = BurnerGasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
