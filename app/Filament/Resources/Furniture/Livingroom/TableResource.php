<?php

namespace App\Filament\Resources\Furniture\Livingroom;

use App\Filament\Resources\Furniture\Livingroom\TableResource\Pages;
use App\Filament\Resources\Furniture\Livingroom\TableResource\RelationManagers;
use App\Models\Furniture\Livingroom\Table as LivingRoomTable;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TableResource extends Resource
{
    protected static ?string $model = LivingRoomTable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    protected static ?string $pluralModelLabel ='طاولة';

    protected static ?string $label = 'طاولة';


    protected static ?string $navigationGroup = 'كل الأثاث';


    protected static ?string $navigationParentItem = 'غرفة المعيشة';


    public static function form(Form $form): Form
    {
        return $form
            ->schema(LivingRoomTable::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(LivingRoomTable::getFilamentTable())
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
            'index' => Pages\ListTables::route('/'),
            // 'create' => Pages\CreateTable::route('/create'),
            // 'edit' => Pages\EditTable::route('/{record}/edit'),
        ];
    }
}
