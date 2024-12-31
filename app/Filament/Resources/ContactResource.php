<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\Pages\ViewContact;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Group;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'التواصل معنا';

    protected static ?string $label = 'التواصل مع الموقع';

    protected static ?int $navigationSort = 7;



    public static function form(Form $form): Form
    {
        return $form
            ->schema(Contact::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(Contact::getFilamentTable())
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->slideOver(),
                Tables\Actions\DeleteAction::make()
                    ->slideOver(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }




    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('رسالة التواصل من العملاء')
                    ->columns(3)
                    ->schema([

                        TextEntry::make('first_name')
                            ->label('الإسم الأول'),
                        TextEntry::make('last_name')
                            ->label('اسم العائلة'),
                        TextEntry::make('phone')
                            ->label('رقم الهاتف'),

                        Group::make()
                        ->columnSpanFull()
                        ->schema([

                            TextEntry::make('content')
                                ->label('المحتوى'),

                        ]),



                        ])

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
            'index' => Pages\ListContacts::route('/'),
            // 'create' => Pages\CreateContact::route('/create'),
            // 'edit' => Pages\EditContact::route('/{record}/edit'),
            // 'view' => ViewContact::route('/{record}'),
        ];
    }
}
