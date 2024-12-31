<?php

namespace App\Filament\Resources\Furniture\OfficefurnitureResource\Pages;

use App\Filament\Resources\Furniture\OfficefurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOfficefurnitures extends ListRecords
{
    protected static string $resource = OfficefurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->label('اضافة')

        ];
    }
}
