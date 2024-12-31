<?php

namespace App\Filament\Resources\Furniture;

use App\Filament\Resources\Furniture\EntrywayfurnitureResource\Pages;
use App\Filament\Resources\Furniture\EntrywayfurnitureResource\RelationManagers;
use App\Models\Furniture\Entrywayfurniture;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntrywayfurnitureResource extends Resource
{
    protected static ?string $model = Entrywayfurniture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    protected static ?string $pluralModelLabel ='أثاث المدخل';

    protected static ?string $label = 'أثاث المدخل';



    protected static ?string $navigationGroup = 'كل الأثاث';



    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Entrywayfurniture::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Entrywayfurniture::getFilamentTable())
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
            'index' => Pages\ListEntrywayfurnitures::route('/'),
            // 'create' => Pages\CreateEntrywayfurniture::route('/create'),
            // 'edit' => Pages\EditEntrywayfurniture::route('/{record}/edit'),
        ];
    }
}
