<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrollResource\Pages;
use App\Filament\Resources\TrollResource\RelationManagers;
use App\Models\Troll;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;







class TrollResource extends Resource
{
    protected static ?string $model = Troll::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel = 'ترولى';

    protected static ?string $label = 'ترولى';


    protected static ?string $navigationGroup = 'المطابخ';




    public static function form(Form $form): Form
    {
        return $form
            ->schema(Troll::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Troll::getFilamentTable())
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
            'index' => Pages\ListTrolls::route('/'),
            // 'create' => Pages\CreateTroll::route('/create'),
            // 'edit' => Pages\EditTroll::route('/{record}/edit'),
        ];
    }
}
