<?php

namespace App\Filament\Resources\Furniture\OutdoorfurnitureResource\Pages;

use App\Filament\Resources\Furniture\OutdoorfurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOutdoorfurniture extends EditRecord
{
    protected static string $resource = OutdoorfurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver()
                ->label('حذف'),
        ];
    }
}
