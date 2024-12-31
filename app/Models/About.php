<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Fieldset;


class About extends Model
{
    /** @use HasFactory<\Database\Factories\AboutFactory> */
    use HasFactory;

    public $fillable = ['title', 'email', 'phone', 'body'];



    public static function getForm() : array
    {
        return [

            Fieldset::make('تعديل البيانات ( urban-furniva.com/about-us )')
            ->schema([
                TextInput::make('title')
                    ->label('العنوان')
                    ->columnSpanFull(),
                // ColorPicker::make('color'),
                // TextInput::make('title'),
                TextInput::make('email')
                    ->email(),
                TextInput::make('phone')
                    ->tel(),
                RichEditor::make('body')
                    ->columnSpanFull(),

            ]),
        ];
    }

    public static function getFilamentTable() : array
    {
        return [
            TextColumn::make('title')
            ->translateLabel(),
            TextColumn::make('email'),
            TextColumn::make('phone'),
        ];
    }
}
