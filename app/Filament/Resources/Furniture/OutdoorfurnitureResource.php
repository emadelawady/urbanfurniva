<?php

namespace App\Filament\Resources\Furniture;

use App\Filament\Resources\Furniture\OutdoorfurnitureResource\Pages;
use App\Filament\Resources\Furniture\OutdoorfurnitureResource\RelationManagers;
use App\Models\Furniture\Outdoorfurniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OutdoorfurnitureResource extends Resource
{
    protected static ?string $model = Outdoorfurniture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='أثاث خارجى';

    protected static ?string $label = 'أثاث خارجى';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Outdoorfurniture::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Outdoorfurniture::getFilamentTable())
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
            'index' => Pages\ListOutdoorfurnitures::route('/'),
            // 'create' => Pages\CreateOutdoorfurniture::route('/create'),
            // 'edit' => Pages\EditOutdoorfurniture::route('/{record}/edit'),
        ];
    }
}
