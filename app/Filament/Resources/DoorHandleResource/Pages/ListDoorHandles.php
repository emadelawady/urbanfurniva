<?php

namespace App\Filament\Resources\DoorHandleResource\Pages;

use App\Filament\Resources\DoorHandleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDoorHandles extends ListRecords
{
    protected static string $resource = DoorHandleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
