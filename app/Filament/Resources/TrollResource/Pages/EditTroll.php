<?php

namespace App\Filament\Resources\TrollResource\Pages;

use App\Filament\Resources\TrollResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTroll extends EditRecord
{
    protected static string $resource = TrollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف')
                ->slideOver(),
        ];
    }
}
