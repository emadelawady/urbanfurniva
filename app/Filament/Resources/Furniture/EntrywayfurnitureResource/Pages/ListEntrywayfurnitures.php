<?php

namespace App\Filament\Resources\Furniture\EntrywayfurnitureResource\Pages;

use App\Filament\Resources\Furniture\EntrywayfurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntrywayfurnitures extends ListRecords
{
    protected static string $resource = EntrywayfurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة'),
        ];
    }
}
