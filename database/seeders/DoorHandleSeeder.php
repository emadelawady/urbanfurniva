<?php

namespace Database\Seeders;

use App\Models\DoorHandle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;

class DoorHandleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'مسكة ألمنيوم',
                'content' => 'تستخدم فى أبواب الألمنيوم , مسكة باب عادى , متوفرة بعدة ألوان , اسود , بيج , برونزى , حليبى , فضى',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'مسكة ألمنيوم خشابى',
                'content' => 'تستخدم فى ابواب الألمنيوم , اللون خشابى , مبروم',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'مسكة استراكشر حليبى',
                'content' => 'مسكة استراكشر لسان , اللون حليبى',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'مسكة شبابيك ألمنيوم',
                'content' => 'تسخدم فى الشبابيك الألمنيوم السحاب , 17 سم , اللون حليبى',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'مسكة لون أسود',
                'content' => 'تستخدم فى أبواب الألمنيوم , اللون اسود , سهلة التركيب',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'مسكة لون أسود',
                'content' => 'متوفرة بعدة مقاسات , 15 سم , 20 سم , 25 سم اللون اسود',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'مسكة نحاسى ذهبى',
                'content' => 'مسكة نحاسى اصفر , سهلة التركيب , سهلة التنظيف , 128 مم',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'مسكة لايت شامبين',
                'content' => 'تستخدم فى ابواب الألمنيوم اللون لايت شامبين',
                'model' => 'مسكة',
                'product_image' => 'kitchen/doorhandles/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): DoorHandle {


            return DoorHandle::firstOrCreate([
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
