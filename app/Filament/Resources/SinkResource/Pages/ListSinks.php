<?php

namespace App\Filament\Resources\SinkResource\Pages;

use App\Filament\Resources\SinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSinks extends ListRecords
{
    protected static string $resource = SinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة')
                ->slideOver(),
        ];
    }
}
