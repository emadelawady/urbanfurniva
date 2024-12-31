<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;




class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    public $fillable = ['first_name', 'last_name', 'phone', 'content'];

    public static function getForm() : array
    {
        return[
            Group::make()
                ->schema([

                    Section::make('بيانات الاتصال')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('first_name')
                                        ->label('الاسم الأول')
                                        ->columnSpanFull(),
                                    TextInput::make('last_name')
                                        ->label('الاسم الأخير')
                                        ->columnSpanFull(),
                                    TextInput::make('email')
                                        ->label('البريد الإليكترونى')
                                        ->columnSpanFull(),
                                ])
                        ])

                ])->columnSpanFull(),


            Group::make()
                ->schema([

                    Section::make('المحتوى')
                        ->schema([

                            Group::make()
                                ->schema([

                                    RichEditor::make('content')
                                        ->label('الوصف'),
                                ])

                        ])

                ])->columnSpanFull(),
        ];
    }

    public static function getFilamentTable() : array
    {
        return [
            TextColumn::make('first_name')
                ->label('الاسم الأول')
                ->translateLabel(),
            TextColumn::make('last_name')
                ->label('الاسم الأخير'),
            TextColumn::make('phone')
                ->label('رقم الهاتف'),
        ];
    }
}
