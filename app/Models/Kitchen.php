<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\ColorPicker;
use Filament\Tables\Columns\ImageColumn;




class Kitchen extends Model
{
    /** @use HasFactory<\Database\Factories\KitchenFactory> */
    use HasFactory;

    public $fillable = [
        'title',
        'color',
        'holder',
        'door',
        'meters',
        'granite',
        'content',
        'product_image'
    ];

    public $casts = ['product_image' => 'array'];


    public static function getForm(): array
    {
        return [

            // Global Settings

            Group::make()
                ->schema([

                    Section::make('بيانات أولية')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('title')
                                        ->label('عنوان المطبخ')
                                        ->columnSpanFull(),
                                    TextInput::make('holder')
                                        ->label('مسكة'),
                                    TextInput::make('door')
                                        ->label('درفة'),
                                    TextInput::make('granite')
                                        ->label('جرانيت'),
                                    TextInput::make('color')
                                        ->label('اللون'),
                                    TextInput::make('meters')
                                        ->label('عدد الأمتار')
                                        ->numeric(),

                                ])->columns(2)
                        ])

                ])
                ->columnSpan([
                    'sm' => 1,
                ]),

            // Logo

            Group::make()
                ->schema([

                    Section::make('صورة المنتج')
                        ->schema([
                            Fieldset::make('Urban Furniva')
                                ->schema([

                                    FileUpload::make('product_image')
                                        ->label('')
                                        ->image()
                                        ->imageEditor()
                                        ->circleCropper()
                                        ->columnSpanFull()
                                        ->multiple()
                                        ->panelLayout('grid')
                                        ->imagePreviewHeight('350')
                                ])
                        ])

                ])
                ->columnStart([
                    'sm' => 1,
                    'lg' => 2,
                ]),
                // ->columnSpanFull(),


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

    public static function getFilamentTable(): array
    {
        return [
            TextColumn::make('title')
                ->label('المطبخ')
                ->translateLabel(),
            TextColumn::make('color')
                ->label('الألوان')
                ->numeric(),
            TextColumn::make('meters')
                ->label('عدد الأمتار'),
            ImageColumn::make('product_image')
                ->label('صورة المنتج')
                ->size(50)
                ->circular()
                ->stacked()
                ->limit(2)
                ->limitedRemainingText(size:'lg')
        ];
    }

}
