<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;


class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;

    protected $casts = [
        'attachments' => 'array',
    ];


    public $fillable = [
        'email',
        'phone',
        'address',
        'website_title',
        'logo_image',
        'copyrights',
        'aboutus_link',
        'contact_link',
        'whyus_link',
        'ourworks_link',
        'kitchens_front_page_link',
        'furnitures_front_page_link',
        'social_twitter_link',
        'social_tiktok_link',
        'social_facebook_link',
        'social_insta_link',
        'social_youtube_link',
        'social_linkedin_link',
    ];




    public static function getForm(): array
    {
        return [

            // Global Settings

            Group::make()
                ->schema([

                    Section::make('الإعدادات الأساسية')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('website_title')
                                        ->label('عنوان الموقع'),
                                    TextInput::make('email')
                                        ->label('البريد الإليكترونى')
                                        ->email(),
                                    TextInput::make('phone')
                                        ->label('رقم الهاتف')
                                        ->tel(),
                                    TextInput::make('address')
                                        ->label('العنوان'),
                                    TextInput::make('copyrights')
                                        ->label('حقوق الطبع والنشر')
                                        ->columnSpanFull(),

                                ])->columns(2)
                        ])

                ])
                ->columnSpan([
                    'sm' => 1,
                    'lg' => 2,
                ]),

            // Logo

            Group::make()
                ->schema([


                    Section::make('شعار الموقع')
                        ->schema([
                            Fieldset::make('Urban Furniva')
                                ->schema([


                                    FileUpload::make('logo_image')
                                        ->label('')
                                        ->image()
                                        ->avatar()
                                        ->imageEditor()
                                        ->circleCropper()
                                        ->columnSpanFull()
                                        // ->deletable(false)
                                ])

                        ])

                ])
                ->columnStart([
                    'sm' => 1,
                    'lg' => 3,
                ]),


            // Social Media

            Group::make()
                ->schema([


                    Section::make('اعدادات التواصل الإجتماعى')
                        ->schema([

                            Group::make()
                                ->schema([

                                    TextInput::make('social_twitter_link')
                                        ->helperText('')
                                        ->hint('')
                                        ->label('X أو تويتر سابقاً'),
                                    TextInput::make('social_tiktok_link')
                                        ->label('تيك توك'),
                                    TextInput::make('social_facebook_link')
                                        ->label('فيسبوك'),
                                    TextInput::make('social_insta_link')
                                        ->label('انستجرام'),
                                    TextInput::make('social_linkedin_link')
                                        ->label('لينكدان'),
                                    TextInput::make('social_youtube_link')
                                        ->label('يوتيوب'),

                                ])->columns(2)



                        ])
                ])
                ->columnSpan([
                    'sm' => 1,
                    'lg' => 2,
                ]),

        ];
    }


    public static function getFilamentTable(): array
    {
        return [
            TextColumn::make('website_title')
                ->label('اسم الموقع')
                ->translateLabel(),
            TextColumn::make('email')
                ->label('البريد الإليكترونى')
                ->numeric(),
            TextColumn::make('address')
                ->label('العنوان')
        ];
    }
}
