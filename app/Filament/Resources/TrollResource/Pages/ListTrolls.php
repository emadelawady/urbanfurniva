<?php

namespace App\Filament\Resources\TrollResource\Pages;

use App\Filament\Resources\TrollResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrolls extends ListRecords
{
    protected static string $resource = TrollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
