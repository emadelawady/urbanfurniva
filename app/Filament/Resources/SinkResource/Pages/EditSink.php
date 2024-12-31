<?php

namespace App\Filament\Resources\SinkResource\Pages;

use App\Filament\Resources\SinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSink extends EditRecord
{
    protected static string $resource = SinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('حذف')
                ->slideOver(),
        ];
    }
}
