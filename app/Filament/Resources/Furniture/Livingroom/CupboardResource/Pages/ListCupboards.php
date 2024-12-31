<?php

namespace App\Filament\Resources\Furniture\Livingroom\CupboardResource\Pages;

use App\Filament\Resources\Furniture\Livingroom\CupboardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCupboards extends ListRecords
{
    protected static string $resource = CupboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
