<?php

namespace App\Filament\Resources\Furniture\Livingroom\ChairResource\Pages;

use App\Filament\Resources\Furniture\Livingroom\ChairResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChairs extends ListRecords
{
    protected static string $resource = ChairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver()
                ->label('اضافة'),
        ];
    }
}
