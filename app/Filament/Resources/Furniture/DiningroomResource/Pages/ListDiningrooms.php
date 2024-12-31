<?php

namespace App\Filament\Resources\Furniture\DiningroomResource\Pages;

use App\Filament\Resources\Furniture\DiningroomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiningrooms extends ListRecords
{
    protected static string $resource = DiningroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
