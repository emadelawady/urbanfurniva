<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SofaResource\Pages;
use App\Filament\Resources\SofaResource\RelationManagers;
use App\Models\Furniture;
use App\Models\Sofa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;







class SofaResource extends Resource
{
    protected static ?string $model = Sofa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel ='كنب';

    protected static ?string $label = 'كنب';


    protected static ?string $navigationGroup = 'كل الأثاث';


    protected static ?string $navigationParentItem = 'غرفة المعيشة';



    protected static ?int $navigationSort = 2;




    public static function form(Form $form): Form
    {
        return $form
            ->schema(Sofa::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Sofa::getFilamentTable())
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
            'index' => Pages\ListSofas::route('/'),
            // 'create' => Pages\CreateSofa::route('/create'),
            // 'edit' => Pages\EditSofa::route('/{record}/edit'),
        ];
    }
}
