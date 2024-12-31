<?php

namespace Database\Seeders;

use App\Models\Kitchen;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;


class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'مطبخ المونيوم صاج',
                'color' => 'H 720',
                'holder' => 'B 503',
                'door' => '2008D',
                'meters' => rand(10,20),
                'granite' => 'Golden Stone',
                'content' => 'مطبخ المنيوم صاج مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/1/1_1.jpg',
                    'kitchen/kitchens/1/1_2.jpg',
                    'kitchen/kitchens/1/1_3.jpg',
                    'kitchen/kitchens/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'مطبخ صاج سادة',
                'color' => 'H 30',
                'holder' => 'B 504',
                'door' => 'مربع',
                'meters' => rand(10,20),
                'granite' => 'ماربل امريكى',
                'content' => 'مطبخ المنيوم صاج مميز سادة',
                'product_image' => [
                    'kitchen/kitchens/2/1_1.jpg',
                    'kitchen/kitchens/2/1_2.jpg',
                    'kitchen/kitchens/2/1_3.jpg',
                    'kitchen/kitchens/2/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'مطبخ المونيوم كلاسيك',
                'color' => 'H 830',
                'holder' => 'G 504',
                'door' => '2008D',
                'meters' => rand(10,20),
                'granite' => 'اكرلك ماربيل',
                'content' => 'مطبخ المنيوم صاج مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/3/1_1.jpg',
                    'kitchen/kitchens/3/1_2.jpg',
                    'kitchen/kitchens/3/1_3.jpg',
                    'kitchen/kitchens/3/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'مطبخ صاج اسيوى',
                'color' => 'H 802',
                'holder' => 'كورى',
                'door' => '2022D',
                'meters' => rand(10,20),
                'granite' => 'F7',
                'content' => 'مطبخ المنيوم اسيوى مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/4/1_1.jpg',
                    'kitchen/kitchens/4/1_2.jpg',
                    'kitchen/kitchens/4/1_3.jpg',
                    'kitchen/kitchens/4/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'مطبخ مودرن',
                'color' => '1448 RK',
                'holder' => 'B 504',
                'door' => 'مربع',
                'meters' => rand(10,20),
                'granite' => 'ماربيل',
                'content' => 'مطبخ المنيوم مودرن مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/5/1_1.jpg',
                    'kitchen/kitchens/5/1_2.jpg',
                    'kitchen/kitchens/5/1_3.jpg',
                    'kitchen/kitchens/5/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'مطبخ مودرن',
                'color' => '830',
                'holder' => 'ذهبى',
                'door' => '2008',
                'meters' => rand(10,20),
                'granite' => 'وطنى 1001',
                'content' => 'مطبخ المنيوم مودرن مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/5/1_1.jpg',
                    'kitchen/kitchens/5/1_2.jpg',
                    'kitchen/kitchens/5/1_3.jpg',
                    'kitchen/kitchens/5/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'مطبخ كلاسيك خشابى',
                'color' => 'خشابى',
                'holder' => 'B 504',
                'door' => 'مربع',
                'meters' => rand(10,20),
                'granite' => 'وطنى',
                'content' => 'مطبخ المنيوم كلاسيك خشابى مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/7/1_1.jpg',
                    'kitchen/kitchens/7/1_2.jpg',
                    'kitchen/kitchens/7/1_3.jpg',
                    'kitchen/kitchens/7/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'مطبخ صاج أبيض',
                'color' => 'أبيض لؤلؤ',
                'holder' => 'B 503',
                'door' => '2008D',
                'meters' => rand(10,20),
                'granite' => 'وطنى',
                'content' => 'مطبخ المنيوم صاج أبيض مميز عصرى',
                'product_image' => [
                    'kitchen/kitchens/8/1_1.jpg',
                    'kitchen/kitchens/5/1_2.jpg',
                    'kitchen/kitchens/8/1_3.jpg',
                    'kitchen/kitchens/8/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Kitchen {

            return Kitchen::firstOrCreate([
                'title' => $record['title'],
                'color' => $record['color'],
                'holder' => $record['holder'],
                'door' => $record['door'],
                'meters' => $record['meters'],
                'granite' => $record['granite'],
                'content' => $record['content'],
                'product_image' => $record['product_image'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });




    }
}
