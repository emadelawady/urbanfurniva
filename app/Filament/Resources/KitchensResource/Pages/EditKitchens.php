<?php

namespace App\Filament\Resources\KitchensResource\Pages;

use App\Filament\Resources\KitchensResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKitchens extends EditRecord
{
    protected static string $resource = KitchensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver(),
            Actions\ViewAction::make()
                ->slideOver(),
        ];
    }
}
