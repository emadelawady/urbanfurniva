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




class Oven extends Model
{
    /** @use HasFactory<\Database\Factories\OvenFactory> */
    use HasFactory;


    public $fillable = [
        'title',
        'content',
        'product_image',
        'model',
    ];

    public $casts = ['product_image' => 'array'];


    public static function getForm(): array
    {
        return [

            Group::make()
                ->schema([

                    Section::make('بيانات أولية')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('title')
                                        ->label('اسم الفرن')
                                        ->columnSpanFull(),
                                    TextInput::make('model')
                                        ->label('الموديل')
                                        ->hint('عنصر اختيارى')
                                        ->columnSpanFull(),

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
                                        // ->multiple()
                                        // ->panelLayout('grid')
                                        ->imagePreviewHeight('300')
                                ])

                        ])

                ])
                ->columnStart([
                    'sm' => 1,
                    'lg' => 2,
                ]),
                // ->columnSpanFull(),

            // Global Settings

            Group::make()
            ->schema([


                Section::make('المحتوى')
                    ->schema([

                        Group::make()
                            ->schema([

                                RichEditor::make('content')
                                    ->extraInputAttributes(['class' => 'your-class'])
                                    ->label('الوصف'),

                            ])
                    ])

            ])->columnSpanFull(),
        ];
    }

    public static function getFilamentTable() : array
    {
        return [
            TextColumn::make('title')
                ->label('الفرن')
                ->translateLabel(),
            TextColumn::make('model')
                ->label('الموديل'),
            ImageColumn::make('product_image')
                ->label('صورة المنتج')
                ->size(100)
                ->circular()
                ->stacked()
                ->limit(2)
                ->limitedRemainingText(size:'lg')
        ];
    }

}
