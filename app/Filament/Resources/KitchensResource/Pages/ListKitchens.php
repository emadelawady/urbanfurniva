<?php

namespace App\Filament\Resources\KitchensResource\Pages;

use App\Filament\Resources\KitchensResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKitchens extends ListRecords
{
    protected static string $resource = KitchensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
