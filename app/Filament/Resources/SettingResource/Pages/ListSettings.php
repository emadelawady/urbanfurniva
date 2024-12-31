<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use App\Models\Setting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSettings extends ListRecords
{
    protected static string $resource = SettingResource::class;

    protected function getHeaderActions(): array
    {
        if(Setting::count() < 1)
        {
            return [

                Actions\CreateAction::make()
                    ->label('اضافة')
                    ->slideOver(),
            ];
        } else{
            return [];
        }
    }
}
