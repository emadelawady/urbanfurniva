<?php

namespace App\Filament\Resources\SofaResource\Pages;

use App\Filament\Resources\SofaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSofa extends EditRecord
{
    protected static string $resource = SofaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver(),
        ];
    }
}
