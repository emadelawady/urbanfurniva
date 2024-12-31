<?php

namespace App\Filament\Resources\SofaResource\Pages;

use App\Filament\Resources\SofaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSofas extends ListRecords
{
    protected static string $resource = SofaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver(),
        ];
    }
}
