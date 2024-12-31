<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoorHandleResource\Pages;
use App\Filament\Resources\DoorHandleResource\RelationManagers;
use App\Models\DoorHandle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;





class DoorHandleResource extends Resource
{
    protected static ?string $model = DoorHandle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel = 'مسكات';

    protected static ?string $label = 'مسكات';


    protected static ?string $navigationGroup = 'المطابخ';


    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(DoorHandle::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(DoorHandle::getFilamentTable())
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
                    ->slideOver(),
                Tables\Actions\EditAction::make()
                    ->slideOver(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDoorHandles::route('/'),
            // 'create' => Pages\CreateDoorHandle::route('/create'),
            // 'edit' => Pages\EditDoorHandle::route('/{record}/edit'),
        ];
    }
}
