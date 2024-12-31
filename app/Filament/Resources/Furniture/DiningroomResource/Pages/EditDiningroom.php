<?php

namespace App\Filament\Resources\Furniture\DiningroomResource\Pages;

use App\Filament\Resources\Furniture\DiningroomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiningroom extends EditRecord
{
    protected static string $resource = DiningroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف'),
        ];
    }
}
