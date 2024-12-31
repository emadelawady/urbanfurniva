<?php

namespace App\Filament\Resources\Furniture\OfficefurnitureResource\Pages;

use App\Filament\Resources\Furniture\OfficefurnitureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficefurniture extends EditRecord
{
    protected static string $resource = OfficefurnitureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver()
                ->label('تعديل'),
        ];
    }
}
