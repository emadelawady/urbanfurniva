<?php

namespace App\Filament\Resources\LivingRoomResource\Pages;

use App\Filament\Resources\LivingRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLivingRooms extends ListRecords
{
    protected static string $resource = LivingRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
