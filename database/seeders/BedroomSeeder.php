<?php

namespace Database\Seeders;

use App\Models\Furniture\Bedroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'طقم سرير أدريانا كوين + تسريحة ومقعد',
                'weight' => '216.50 *  157.30 / 87 سم',
                'color' => 'بني',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'مغلّف',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => '
                يعد طقم سرير أدريانا حجم كوين المكون من خمس قطع إضافة مثالية إلى غرفة النوم الخاصة بك. يشتمل الطقم على إطار سرير متين، طاولة بجانب السرير راقية',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/1/1_1.jpg',
                    'furniture/bedroom/1/1_2.jpg',
                    'furniture/bedroom/1/1_3.jpg',
                    'furniture/bedroom/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'طقم سرير أدريانا كوين + تسريحة ومقعد',
                'weight' => '265 *  96 / 77 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'مغلّف',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'طقم سرير بحجم كوين 5 قطع و يعتبر إضافة مثالية لملاذ غرفة نومك تشتمل مجموعة غرفة النوم على هيكل سرير قوي وطاولة سرير أنيقة وخزانة واسعة مع مرآة ومقعد مصممة لجعل مساحة غرفة نومك عملية وأنيقة في نفس الوقت',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/2/2_1.jpg',
                    'furniture/bedroom/2/2_2.jpg',
                    'furniture/bedroom/2/2_3.jpg',
                    'furniture/bedroom/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'غرفة نوم يونغ - خشب بلوط سونوما الفرنسي',
                'weight' => '276 *  96 / 68 سم',
                'color' => 'بني',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'التصفيح بالرقائق',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'اللمسات النهائية تضفي عليها مظهرًا ناعمًا يضيف لمسة من الفخامة إلى أي غرفة نوم هيكل السرير بحجم كوين واسع بما يكفي للسماح لك بالنوم بشكل مريح يتميز بتصميم كلاسيكي وبلوح رأسي ولوح قدم بسيط',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/3/3_1.jpg',
                    'furniture/bedroom/3/3_2.jpg',
                    'furniture/bedroom/3/3_3.jpg',
                    'furniture/bedroom/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'غرفة نوم سوبريم 90×200 يونج',
                'weight' => '171 *  98 / 68 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'أسفنج , ألياف',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'خزانة ملابس واسعة بمرآة، مقعد، تم تصميمهم لجعل غرفة النوم الخاصة بك عملية وأنيقة في الوقت ذاته. تمنح اللمسات النهائية المصفحة للطقم مظهرًا سلسًا يضفي لمسة من الرقي إلى أي غرفة النوم.',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/4/4_1.jpg',
                    'furniture/bedroom/4/4_2.jpg',
                    'furniture/bedroom/4/4_3.jpg',
                    'furniture/bedroom/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'غرفة نوم  90 200 - أبيض / رمادي',
                'weight' => '235 *  83 / 105 سم',
                'color' => 'خشب البلوط الأبيض وسونوما/الرمادي',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'خشب',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'توفر المرآة رؤية للمستخدم مما يساعده على ارتداء ملابس بسهولة وراحة إذ أنه مصنوع من زجاج عالي الجودة ويأتي بإطار أملس يسمح لك المقعد بالجلوس وتلبية احتياجات التزيين الخاصة بك',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/5/5_1.jpg',
                    'furniture/bedroom/5/5_2.jpg',
                    'furniture/bedroom/5/5_3.jpg',
                    'furniture/bedroom/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'طقم سرير جامورة بحجم كبير  مع خزانة ملابس ومقعد',
                'weight' => '180x200',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'خشب الصنوبر',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يأتي طقم سرير كينج 180 × 200 سم بإطار سرير مصمم بشكل جميل وخزانة أنيقة وكرسي مريح المجموعة بأكملها مصنوعة من خشب هندسي عالي الجودة قوي ومتين',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/6/6_1.jpg',
                    'furniture/bedroom/6/6_2.jpg',
                    'furniture/bedroom/6/6_3.jpg',
                    'furniture/bedroom/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'طقم غرفة نوم رمادي من غامورا',
                'weight' => '220 *  96 / 77 سم',
                'color' => 'رمادي',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => 'خشب',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'طقم سرير كينج من غامورا 180 × 200 سم بإطار سرير مصمم بشكل جميل وخزانة أنيقة وكرسي مريحbedroomنوع من خشب عالي الجودة قوي ومتين',
                'model' => 'غرفة نوم',
                'product_image' => [
                    'furniture/bedroom/7/7_1.jpg',
                    'furniture/bedroom/7/7_2.jpg',
                    'furniture/bedroom/7/7_3.jpg',
                    'furniture/bedroom/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'طقم غرفة نوم من غامورا - اللون العاجي',
                'weight' => '180X 200',
                'color' => 'أبيض',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'طقم سرير كينج من غامورا 180 × 200 سم بإطار سرير مصمم بشكل جميل وخزانة أنيقة وكرسي مريح الطقم بأكمله مصنوع من خشب عالي الجودة قوي ومتين',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/bedroom/8/8_1.jpg',
                    'furniture/bedroom/8/8_2.jpg',
                    'furniture/bedroom/8/8_3.jpg',
                    'furniture/bedroom/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],



        ])
        ->each(function ($record): Bedroom {


            return Bedroom::firstOrCreate([
                'title' => $record['title'],
                'weight' => $record['weight'],
                'color' => $record['color'],
                'capacity' => $record['capacity'],
                'material' => $record['material'],
                'upholstery_material' => $record['upholstery_material'],
                'warranty' => $record['warranty'],
                'content' => $record['content'],
                'model' => $record['model'],
                'product_image' => $record['product_image'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });
    }
}
