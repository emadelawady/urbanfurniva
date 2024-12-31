<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivingRoomResource\Pages;
use App\Filament\Resources\LivingRoomResource\RelationManagers;
use App\Models\Furniture;
use App\Models\LivingRoom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;





class LivingRoomResource extends Resource
{
    protected static ?string $model = LivingRoom::class;


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='غرفة المعيشة';

    protected static ?string $label = 'غرفة المعيشة';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;




    public static function form(Form $form): Form
    {
        return $form
            ->schema(LivingRoom::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(LivingRoom::getFilamentTable())
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListLivingRooms::route('/'),
            // 'create' => Pages\CreateLivingRoom::route('/create'),
            // 'edit' => Pages\EditLivingRoom::route('/{record}/edit'),
        ];
    }
}
