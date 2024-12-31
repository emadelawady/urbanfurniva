<?php

namespace App\Filament\Resources\Furniture\BedroomResource\Pages;

use App\Filament\Resources\Furniture\BedroomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBedrooms extends ListRecords
{
    protected static string $resource = BedroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة'),
        ];
    }
}
