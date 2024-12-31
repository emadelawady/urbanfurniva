<?php

namespace App\Filament\Resources\RangeHoodsResource\Pages;

use App\Filament\Resources\RangeHoodsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRangeHoods extends ListRecords
{
    protected static string $resource = RangeHoodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('اضافة شفاط')
                ->slideOver(),
        ];
    }
}
