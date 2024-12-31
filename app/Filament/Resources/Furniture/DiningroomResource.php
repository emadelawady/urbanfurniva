<?php

namespace App\Filament\Resources\Furniture;

use App\Filament\Resources\Furniture\DiningroomResource\Pages;
use App\Filament\Resources\Furniture\DiningroomResource\RelationManagers;
use App\Models\Furniture\Diningroom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiningroomResource extends Resource
{
    protected static ?string $model = Diningroom::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel ='غرفة الطعام';

    protected static ?string $label = 'غرفة الطعام';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Diningroom::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Diningroom::getFilamentTable())
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
            'index' => Pages\ListDiningrooms::route('/'),
            // 'create' => Pages\CreateDiningroom::route('/create'),
            // 'edit' => Pages\EditDiningroom::route('/{record}/edit'),
        ];
    }
}
