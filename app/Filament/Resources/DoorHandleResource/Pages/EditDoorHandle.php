<?php

namespace App\Filament\Resources\DoorHandleResource\Pages;

use App\Filament\Resources\DoorHandleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDoorHandle extends EditRecord
{
    protected static string $resource = DoorHandleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف')
                ->slideOver(),
        ];
    }
}
