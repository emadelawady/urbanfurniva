<?php

namespace App\Filament\Resources\ChairResource\Pages;

use App\Filament\Resources\ChairResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChairs extends ListRecords
{
    protected static string $resource = ChairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
