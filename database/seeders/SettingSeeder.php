<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'website_title' => 'أوربان فورنيفا',
                'email' => 'info@urbanfurniva.com',
                'phone' => '+966 (53) 838 3995',
                'address' => 'المملكة العربية السعودية، الدمام الخبر حى الجسر الشارع التجارى',
                'logo_image' => 'land-logo.png',
                'copyrights' => 'حقوق الطبع والنشر لشركة لاند ريتش 2024. جميع الحقوق محفوظة ©',
                'social_twitter_link' => '#',
                'social_tiktok_link' => '#',
                'social_facebook_link' => '#',
                'social_insta_link' => '#',
                'social_linkedin_link' => '#',
                'social_youtube_link' => '#',

                'created_at' => now(),
                'updated_at' => now(),
            ]

        ])
        ->each(function ($record): Setting {


            return Setting::firstOrCreate([
                'website_title' => $record['website_title'],
                'email' => $record['email'],
                'phone' => $record['phone'],
                'address' => $record['address'],
                'logo_image' => $record['logo_image'],
                'copyrights' => $record['copyrights'],

                'social_twitter_link' => $record['social_twitter_link'],
                'social_tiktok_link' => $record['social_tiktok_link'],
                'social_facebook_link' => $record['social_facebook_link'],
                'social_insta_link' => $record['social_insta_link'],
                'social_linkedin_link' => $record['social_linkedin_link'],
                'social_youtube_link' => $record['social_youtube_link'],

                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });
    }
}
