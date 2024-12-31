<?php

namespace App\Filament\Resources\Furniture\EntrywayfurnitureResource\Pages;

use App\Filament\Resources\Furniture\EntrywayfurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntrywayfurniture extends EditRecord
{
    protected static string $resource = EntrywayfurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف'),
        ];
    }
}
