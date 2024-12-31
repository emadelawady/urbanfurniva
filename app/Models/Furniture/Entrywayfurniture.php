<?php

namespace App\Models\Furniture;

use App\Models\Furniture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;


class Entrywayfurniture extends Model
{
    /** @use HasFactory<\Database\Factories\Furniture\EntrywayfurnitureFactory> */
    use HasFactory;



    public $fillable = [
        'title',
        'content',
        'weight',
        'color',
        'capacity',
        'material',
        'upholstery_material',
        'warranty',
        'furniture_id',
        'model',
        'product_image'
    ];

    public $casts = ['product_image' => 'array'];


    public function furniture()
    {
        return $this->belongsTo(Furniture::class);
    }



    public static function getForm() : array
    {
        return [

            Group::make()
                ->schema([

                    Section::make('بيانات أولية')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('title')
                                        ->label('أثاث المدخل')
                                        ->columnSpanFull(),
                                    TextInput::make('weight')
                                        ->label('الوزن والأبعاد'),
                                    TextInput::make('color')
                                        ->label('اللون'),
                                    TextInput::make('capacity')
                                        ->label('سعة المقعد'),
                                    TextInput::make('material')
                                        ->label('الخامة'),
                                    TextInput::make('upholstery_material')
                                        ->label('خامة التنجيد'),
                                    TextInput::make('warranty')
                                        ->label('الضمان والحماية'),
                                    // ColorPicker::make('color')
                                    //     ->label('اللون'),
                                    TextInput::make('model')
                                        ->label('نوع'),
                                    // Select::make('furniture_id')
                                    //     ->label('الأثاث')
                                    //     ->relationship('furniture', 'title')
                                    //     ->columnSpanFull(),
                                    // Select::make('livingroom_id')
                                    //     ->label('كنب')
                                    //     ->relationship('sofa', 'title')
                                    //     ->columnSpanFull()

                                ])->columns(2)
                        ])

                ])->columnSpan(['sm' => 1,]),

            // Logo

            Group::make()
                ->schema([

                    Section::make('صورة المنتج')
                        ->schema([
                            Fieldset::make('Urban Furniva')
                                ->schema([

                                    FileUpload::make('product_image')
                                        ->label('')
                                        // ->image()
                                        // ->imageEditor()
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

                // Global Settings

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
            TextColumn::make('title')
                ->label('أثاث المدخل')
                ->translateLabel(),
            TextColumn::make('color')
                ->label('اللون'),
            TextColumn::make('capacity')
                ->label('السعة'),
            TextColumn::make('material')
                ->label('الخامة'),
            // TextColumn::make('furniture.title')
            //     ->label('الأثاث')
            //     ->translateLabel(),

            // TextColumn::make('sofa.title')
            //     ->label('الكنب')
            //     ->translateLabel(),

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
