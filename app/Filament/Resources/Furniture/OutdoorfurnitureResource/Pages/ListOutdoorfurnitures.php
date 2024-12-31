<?php

namespace App\Filament\Resources\Furniture\OutdoorfurnitureResource\Pages;

use App\Filament\Resources\Furniture\OutdoorfurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOutdoorfurnitures extends ListRecords
{
    protected static string $resource = OutdoorfurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->label('اضافة'),
        ];
    }
}
