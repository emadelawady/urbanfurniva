<?php

namespace App\Filament\Resources\Furniture;

use App\Filament\Resources\Furniture\OfficefurnitureResource\Pages;
use App\Filament\Resources\Furniture\OfficefurnitureResource\RelationManagers;
use App\Models\Furniture\Officefurniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfficefurnitureResource extends Resource
{
    protected static ?string $model = Officefurniture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='أثاث مكتبى';

    protected static ?string $label = 'أثاث مكتبى';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Officefurniture::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Officefurniture::getFilamentTable())
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver()
                    ->label('تعديل'),
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
            'index' => Pages\ListOfficefurnitures::route('/'),
            // 'create' => Pages\CreateOfficefurniture::route('/create'),
            // 'edit' => Pages\EditOfficefurniture::route('/{record}/edit'),
        ];
    }
}
