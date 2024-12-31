<?php

namespace App\Filament\Resources\Furniture\Livingroom;

use App\Filament\Resources\Furniture\Livingroom\ChairResource\Pages;
use App\Filament\Resources\Furniture\Livingroom\ChairResource\RelationManagers;
use App\Models\Furniture\Livingroom\Chair;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChairResource extends Resource
{
    protected static ?string $model = Chair::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='كراسى';

    protected static ?string $label = 'كراسى';


    protected static ?string $navigationGroup = 'كل الأثاث';


    protected static ?string $navigationParentItem = 'غرفة المعيشة';


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Chair::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Chair::getFilamentTable())

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
            'index' => Pages\ListChairs::route('/'),
            // 'create' => Pages\CreateChair::route('/create'),
            // 'edit' => Pages\EditChair::route('/{record}/edit'),
        ];
    }
}
