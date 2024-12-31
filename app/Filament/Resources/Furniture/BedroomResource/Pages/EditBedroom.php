<?php

namespace App\Filament\Resources\Furniture\BedroomResource\Pages;

use App\Filament\Resources\Furniture\BedroomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBedroom extends EditRecord
{
    protected static string $resource = BedroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف'),
        ];
    }
}
