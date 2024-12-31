<?php

namespace App\Filament\Resources\OvenResource\Pages;

use App\Filament\Resources\OvenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOvens extends ListRecords
{
    protected static string $resource = OvenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
