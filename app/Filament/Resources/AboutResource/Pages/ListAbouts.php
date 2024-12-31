<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\AboutResource;
use App\Models\About;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {

        if(About::count() < 1)
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
