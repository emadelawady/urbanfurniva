<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SinkResource\Pages;
use App\Filament\Resources\SinkResource\RelationManagers;
use App\Models\Sink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;








class SinkResource extends Resource
{
    protected static ?string $model = Sink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $pluralModelLabel = 'مجلى';

    protected static ?string $label = 'مجلى';


    protected static ?string $navigationGroup = 'المطابخ';


    protected static ?int $navigationSort = 6;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Sink::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Sink::getFilamentTable())
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
            'index' => Pages\ListSinks::route('/'),
            // 'create' => Pages\CreateSink::route('/create'),
            // 'edit' => Pages\EditSink::route('/{record}/edit'),
        ];
    }
}
