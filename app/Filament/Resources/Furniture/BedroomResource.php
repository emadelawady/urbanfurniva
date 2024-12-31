<?php

namespace App\Filament\Resources\Furniture;

use App\Filament\Resources\Furniture\BedroomResource\Pages;
use App\Filament\Resources\Furniture\BedroomResource\RelationManagers;
use App\Models\Furniture\Bedroom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BedroomResource extends Resource
{
    protected static ?string $model = Bedroom::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='غرفة النوم';

    protected static ?string $label = 'غرفة النوم';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Bedroom::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Bedroom::getFilamentTable())
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
            'index' => Pages\ListBedrooms::route('/'),
            // 'create' => Pages\CreateBedroom::route('/create'),
            // 'edit' => Pages\EditBedroom::route('/{record}/edit'),
        ];
    }
}
