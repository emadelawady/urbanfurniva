<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RangeHoodsResource\Pages;
use App\Filament\Resources\RangeHoodsResource\RelationManagers;
use App\Models\RangeHood;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class RangeHoodsResource extends Resource
{
    protected static ?string $model = RangeHood::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'شفاطات';

    protected static ?string $label = 'المطبخ';


    protected static ?string $navigationGroup = 'المطابخ';


    public static function form(Form $form): Form
    {
        return $form
            ->schema(RangeHood::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(RangeHood::getFilamentTable())
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
            'index' => Pages\ListRangeHoods::route('/'),
            // 'create' => Pages\CreateRangeHoods::route('/create'),
            // 'edit' => Pages\EditRangeHoods::route('/{record}/edit'),
        ];
    }
}
