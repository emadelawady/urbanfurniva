<?php

namespace Database\Seeders;

use App\Models\Troll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class TrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'ترولى زاوية ',
                'content' => 'ترلي زاوية , دورين ، يمين أو يسار',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'ترولى هيدروليك 62 سم',
                'content' => 'ترلي هيدروليك , سم 62 * سم استیل',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'ترولى تخزين 38 سم',
                'content' => 'ترولي تخزين , 38 , سم , 23 سم , العمق 55 سم سحاب أرضي , سلتين',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'ترولى سحب ستيل 35 سم',
                'content' => 'ترلي سحب استيل 35 سم * 51 سم ستانلس ستيل قسامات 3 أدوار مع : سهل التنظيف ( Easy Clean )',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'ترولى كبير 170 سم',
                'content' => 'ترلي كبير , دولاب 170 سم , 47 سم , عمق 59 سم، سحاب , ستانلس ستيل, 12 رف',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'ترولى زاوية 70 سم',
                'content' => 'ترلي زاوية  70 سم * 80 سم, دورين يمين أو يسار, اللون رمادي غامق',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'ترولى 47 سم',
                'content' => 'دولاب 47 سم * 165 سم , عمق 60 سم , كروم , 5 دور , ثقيل , سحاب حديد',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'ترولى هيدروليك',
                'content' => 'هيدروليك , زجاج أسود شفاف يمين ويسار , دورين',
                'model' => 'ترولى',
                'product_image' => 'kitchen/trolls/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): Troll {


            return Troll::firstOrCreate([
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
