<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FurnituresResource\Pages;
use App\Filament\Resources\FurnituresResource\RelationManagers;
use App\Models\Furniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class FurnituresResource extends Resource
{
    protected static ?string $model = Furniture::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';


    protected static ?string $pluralModelLabel = 'الأثاث';

    protected static ?string $label = 'الأثاث';


    protected static ?string $navigationGroup = 'كل الأثاث';



    // protected static ?string $navigationParentItem = 'كل الاثاث';





    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Furniture::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Furniture::getFilamentTable())

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
            'index' => Pages\ListFurnitures::route('/'),
            // 'create' => Pages\CreateFurnitures::route('/create'),
            // 'edit' => Pages\EditFurnitures::route('/{record}/edit'),
        ];
    }
}
