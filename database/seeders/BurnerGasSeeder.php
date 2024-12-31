<?php

namespace Database\Seeders;

use App\Models\BurnerGas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;


class BurnerGasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'سطح 51 سم',
                'content' => '60 سم * 51 سم , 4 عيون غاز مفرد , صمام امان , حديد ثقيل ( Heavy Duty )'
                ,
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'سطح مقاس 30* 50 سم',
                'content' => 'الأبعاد 30 سم * 50 سم , 2 عين غاز , صمام امان , حديد ثقيل , اشعال ذاتى ',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'سطح 90 سم',
                'content' => 'الأبعاد 90 سم * 50 سم , 5 عيون غاز ( 4 مفرد ,  1دبل ) , صمام امان , حديد ثقيل , اشعال ذاتى ',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'سطح 60 سم',
                'content' => 'الأبعاد 60 سم * 51 سم , 4 عيون غاز مفرد , صمام امان , حديد ثقيل ( Heavy Duty ) , اشعال ذاتى ',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'سطح 52 سم',
                'content' => 'الأبعاد 60 سم * 52 سم , 4 عيون كهربا , التحكم باللمس , سيراميك , مؤشر حرارة للتنبيه , قفل امان تلقائى',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'سطح 90 سم',
                'content' => 'الأبعاد 90 سم * 51 سم 5 عيون غاز ( 4 مفرد , 1 دبل جانبى ) حديد ( Heavy Duty ) صمام أمان',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'سطح 86',
                'content' => 'الأبعاد 86 سم * 51 سم 5 عين غاز ( 4 مفرد , 1 دبل ) صمامات أمان , اشعال ذاتى',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'سطح 90 سم',
                'content' => 'الأبعاد 90 سم * 50 سم , 5 عيون غاز ( 4 مفرد , 1 دبل ) صمام امان , حديد ثقيل , اشعال ذاتى',
                'model' => 'مسطح',
                'product_image' => 'kitchen/burnergas/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): BurnerGas {


            return BurnerGas::firstOrCreate([
                'title' => $record['title'],
                'content' => $record['content'],
                'model' => $record['model'],
                'product_image' => $record['product_image'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });


    }
}
