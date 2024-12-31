<?php

namespace Database\Seeders;

use App\Models\RangeHood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class RangeHoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'شفاط هرمى 100 سم',
                'content' => 'عرض 100 سم , 3 سرعات , قوة الشفط 1000 متر مكعب / الساعة , 3 فلاتر قابلة للغسيل من الدهون 4 اضواء هاللة  ( Halo )',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'شفاط هرمى عرض 90 سم',
                'content' => '90 سم , 2 سرعات للتحكم , قوة الشفط 600 متر مكعب / ساعة , 2 لمبة هالوجين , 3 فلاتر ألمنيوم قابل للغسيل من الدهون , متوفر بعدة ألوان',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'شفاط هرمى عرض 90',
                'content' => 'عرض 90 سم , 2 سرعات , قوة الشفط 500 متر مكعب / الساعة 3 فلاتر من الألمنيوم قابلة للغسيل من الدهون , 2 اضواء هالة ( Halo ) , متوفر بعدة ألوان',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'شفاط عرض 90 سم',
                'content' => 'عرض 90 سم , 3 سرعات , قوة الشفط 480 متر مكعب / ساعة , 3 فلاتر من الأمنيوم قابلة للغسيل من الدهون , ضوء هالة ( Halo ) اللون فضى',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'شفاط عرض 90 سم',
                'content' => 'عرض 90 سم , 3 سرعات , قوة الشفط 650 متر مكعب / ساعة , 3 فلاتر ألمنيوم قابلة للغسيل من الدهون , ضوء هالة',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'شفاط 80 سم',
                'content' => 'المقاس 80 سم قوة الشفط 750 متر / ساعة , زجاج اسود دائرى',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'شفاط عرض 90 سم',
                'content' => '90 سم , 3 سرعات , 2 لمبة هالوجين , 2 فلتر ألمنيوم قابل للغسيل من الدهون',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'شفاط عرض 90 سم',
                'content' => 'عرض 90 سم , هرمى مدور , 3 سرعات , فلاتر داخلية , 2 اضواء هالة ( Halo ) قوة الشفط 520 متر مكعب / ساعة',
                'model' => 'شفاط المطبخ',
                'product_image' => 'kitchen/rangehoods/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): RangeHood {


            return RangeHood::firstOrCreate([
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
