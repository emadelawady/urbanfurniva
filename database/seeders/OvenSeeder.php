<?php

namespace Database\Seeders;

use App\Models\Oven;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class OvenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'فرن بلت ان 60 سم',
                'content' => '60 سم * 60 سم , 10 وظائف , مروحة توزيع الحرارة , سيخ شواية , اضاءة داخلية',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'فرن بلت ان 60 سم كهرباء',
                'content' => '60 سم * 60 سم كهرباء , سيخ شواية دوار , اضاءة داخلية , مؤقت , منبه',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'فرن بلت ان غاز 60 سم',
                'content' => '60 * 60 سم غاز بالكامل , ستانلس ستيل , مؤقت منبه , اضاءة داخلية',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'فرن بلت ان 50 سم ديجيتال',
                'content' => '90 سم * 50 سم , ديجيتال , كهرباء , 7 وظائف , سيخ شواية , مروحة داخلية وخارجية , مؤقت , منبه , اضاءة داخلية',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'فرن بلت ان 60 سم كهرباء',
                'content' => '60 سم * 60 سم كهرباء , ديجيتال , مروحة توزيع حرارة , 9 وظائف , اضاءة داخلية , منبه , مؤقت شواية',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'فرن بلت ان 60 سم',
                'content' => '60 * 60 سم كهرباء , سيخ شواية دوار , اضاءة داخلية , مؤقت ومنبه',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'فرن بلت ان 90 سم',
                'content' => 'الأبعاد 90 سم * 60 سم , 5 عيون غاز ( 4 مفرد , 1 دبل ) مؤقت منبه , اضاءة داخلية , شواية , اشعال ذاتى , سهل التنظيف',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'فرن بلت ان 60 سم',
                'content' => '60 سم * 60 سم كهرباء , ديجيتال , مروحة توزيع حرارة , 9 وظائف , اضاءة داخلية , منبه , مؤقت شواية',
                'model' => 'افران ( بلت - ان )',
                'product_image' => 'kitchen/ovens/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): Oven {


            return Oven::firstOrCreate([
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
