<?php

namespace App\Filament\Resources\Furniture\Livingroom;

use App\Filament\Resources\Furniture\Livingroom\CupboardResource\Pages;
use App\Filament\Resources\Furniture\Livingroom\CupboardResource\RelationManagers;
use App\Models\Furniture\Livingroom\Cupboard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CupboardResource extends Resource
{
    protected static ?string $model = Cupboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='خزينة';

    protected static ?string $label = 'خزينة';


    protected static ?string $navigationGroup = 'كل الأثاث';


    protected static ?string $navigationParentItem = 'غرفة المعيشة';



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Cupboard::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Cupboard::getFilamentTable())
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
            'index' => Pages\ListCupboards::route('/'),
            // 'create' => Pages\CreateCupboard::route('/create'),
            // 'edit' => Pages\EditCupboard::route('/{record}/edit'),
        ];
    }
}
