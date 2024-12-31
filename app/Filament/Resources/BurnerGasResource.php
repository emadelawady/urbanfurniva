<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BurnerGasResource\Pages;
use App\Filament\Resources\BurnerGasResource\RelationManagers;
use App\Models\BurnerGas;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;






class BurnerGasResource extends Resource
{
    protected static ?string $model = BurnerGas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel = 'مسطحات';

    protected static ?string $label = 'مسطح';


    protected static ?string $navigationGroup = 'المطابخ';


    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema(BurnerGas::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(BurnerGas::getFilamentTable())
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
            'index' => Pages\ListBurnerGases::route('/'),
            // 'create' => Pages\CreateBurnerGas::route('/create'),
            // 'edit' => Pages\EditBurnerGas::route('/{record}/edit'),
        ];
    }
}
