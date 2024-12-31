<?php

namespace App\Filament\Resources\RangeHoodsResource\Pages;

use App\Filament\Resources\RangeHoodsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRangeHoods extends EditRecord
{
    protected static string $resource = RangeHoodsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->slideOver(),
        ];
    }
}
