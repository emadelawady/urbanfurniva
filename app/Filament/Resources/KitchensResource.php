<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KitchensResource\Pages;
use App\Filament\Resources\KitchensResource\RelationManagers;
use App\Models\Kitchen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class KitchensResource extends Resource
{
    protected static ?string $model = Kitchen::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static ?string $pluralModelLabel = 'المطابخ';

    protected static ?string $label = 'المطبخ';


    protected static ?string $navigationGroup = 'المطابخ';


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Kitchen::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Kitchen::getFilamentTable())
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->slideOver(),
                Tables\Actions\EditAction::make()
                    ->label('تعديل')
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
            'index' => Pages\ListKitchens::route('/'),
            // 'create' => Pages\CreateKitchens::route('/create'),
            // 'edit' => Pages\EditKitchens::route('/{record}/edit'),
        ];
    }
}
