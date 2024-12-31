<?php

namespace App\Filament\Resources\LivingRoomResource\Pages;

use App\Filament\Resources\LivingRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLivingRoom extends EditRecord
{
    protected static string $resource = LivingRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف')
                ->slideOver(),
        ];
    }
}
