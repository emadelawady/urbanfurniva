<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OvenResource\Pages;
use App\Filament\Resources\OvenResource\RelationManagers;
use App\Models\Oven;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;




class OvenResource extends Resource
{
    protected static ?string $model = Oven::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'فرن (بلت - ان)';

    protected static ?string $label = 'فرن';


    protected static ?string $navigationGroup = 'المطابخ';



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Oven::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Oven::getFilamentTable())
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
            'index' => Pages\ListOvens::route('/'),
            // 'create' => Pages\CreateOven::route('/create'),
            // 'edit' => Pages\EditOven::route('/{record}/edit'),
        ];
    }
}
