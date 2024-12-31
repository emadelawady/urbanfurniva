<?php

namespace Database\Seeders;

use App\Models\Sink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class SinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'مجلى ستانلس 82 سم',
                'content' => 'االابعاد 82 سم * 45 سم  , مصنوع من الستانلس ستيل عالي الجودة , اللون استانلس استيل بتقنية نانو التي تحمي , الحوض من الخدش والتجريح
- الملحقات , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية , سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/1_1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'مجلى ستانلس 68 سم',
                'content' => 'الابعاد 68 سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة - الملحقات , اللون اسود بتقنية نانو التي تحمي , الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/2_2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'مجلى 92 سم',
                'content' => 'مجلى حوضين , الابعاد 92 سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة , اللون اسود بتقنية نانو التي تحمي , الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية , سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/3_3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'مجلى 88 سم',
                'content' => 'مجلى حوضين , الابعاد 88 سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة , اللون استانلس استيل بتقنية نانو التي تحمي الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/4_4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'مجلى 88 سم ستانلس',
                'content' => 'مجلى حوضين , الابعاد 88 سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة اللون ذهبي بتقنية نانو التي تحمي الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية , سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/5_5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'مجلى 65 سم',
                'content' => 'حوض مجلى , الابعاد 65 سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة , اللون اسود بتقنية نانو التي تحمي , الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية سهل التنظيف',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/6_6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'مجلى 75 سم',
                'content' => 'حوض مجلى , الابعاد 75سم * 45 سم , مصنوع من الستانلس ستيل عالي الجودة , اللون اسود بتقنية نانو التي تحمي , الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية سهل التنظيف , الملحقات - صناعة صينية , 2 أنبوب ماء هراب الحوض علبة صابون شلال و خلاط متعدد + غسالة اكواب قطاعة طعام مصفاة مائلة حوض متنقل',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/7_7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'مجلى 85 سم',
                'content' => 'حوض مجلى , الابعاد 85 سم * 50 سم , مصنوع من الستانلس ستيل عالي الجودة , اللون اسود بتقنية نانو التي تحمي , الحوض من الخدش والتجريح , مبطن من الاسفل لعزل الصوت , مقاوم لدرجات الحرارة العالية سهل التنظيف - الملحقات , 2 أنبوب ماء هراب الحوض غسالة أكواب شلال و خلاط متعدد , قطاعة طعام مصفاة مائلة حوض متنقل',
                'model' => 'مجلى',
                'product_image' => 'kitchen/sinks/8_8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])
        ->each(function ($record): Sink {


            return Sink::firstOrCreate([
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
