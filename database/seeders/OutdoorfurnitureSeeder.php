<?php

namespace Database\Seeders;

use App\Models\Furniture\Outdoorfurniture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class OutdoorfurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'جازيبو جايمي - أسود/بني',
                'weight' => 'L 3.6 x W 4.6 x H 3.15 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 10,
                'material' => 'حديد',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تتميز جازيبو جاسمي بتصميم بسيط، تم تصميمه لرفع مستوى مظهر أي مساحة دون عناء. مصنوعة من معادن عالية الجودة، وتتميز شرفة المراقبة بالقوة والمتانة ومصممة لتتحمل حتى الظروف الجوية القاسية.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/1/1_1.jpg',
                    'furniture/outdoorfurniture/1/1_2.jpg',
                    'furniture/outdoorfurniture/1/1_3.jpg',
                    'furniture/outdoorfurniture/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'نيو ألميرا مظلة 3X3 متر',
                'weight' => '300 *  300 / 280 سم',
                'color' => 'بيج',
                'capacity' => 6,
                'material' => 'Aluminium',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'تعد مظلة نيو ألميرا 3X3 متر إضافة أنيقة وعملية إلى مساحتك بالهواء الطلق، صُممت المظلة لتوفير الظل وترتقي بتجربتك بالهواء الطلق.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/2/2_1.jpg',
                    'furniture/outdoorfurniture/2/2_2.jpg',
                    'furniture/outdoorfurniture/2/2_3.jpg',
                    'furniture/outdoorfurniture/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'طقم أريكة روما بخمسة مقاعد',
                'weight' => 'L 202 x W 84.5 x H 73.5 سم',
                'color' => 'رمادى',
                'capacity' => 5,
                'material' => 'Aluminium',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'تتميز مجموعة أريكة روما المكونة من 5 مقاعد بتصميم عصري حديث، تم تصميمه لرفع مستوى مظهر أي مساحة خارجية دون عناء.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/3/3_1.jpg',
                    'furniture/outdoorfurniture/3/3_2.jpg',
                    'furniture/outdoorfurniture/3/3_3.jpg',
                    'furniture/outdoorfurniture/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'إيدين مجموعة بلكونة ٢+١',
                'weight' => 'L 57 x W 56 x H 74 سم',
                'color' => 'رمادى',
                'capacity' => 2,
                'material' => 'فولاذ',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'ارتقي بمساحتك الخارجية مع مجموعة بلكونة إيدين 2+1، هي مجموعة مصممة بعناية لتجلب الراحة والأناقة إلى شرفتك أو فنائك.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/4/4_1.jpg',
                    'furniture/outdoorfurniture/4/4_2.jpg',
                    'furniture/outdoorfurniture/4/4_3.jpg',
                    'furniture/outdoorfurniture/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'طقم سفرة أريكة من اريال',
                'weight' => 'L 192 x W 69 x H 62 سم',
                'color' => 'بيج',
                'capacity' => 9,
                'material' => 'Steel',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تتميز مجموعة الطعام اريال صوفا بتصميم أنيق يجمع بين الأناقة والفائدة في تصميمها.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/5/5_1.jpg',
                    'furniture/outdoorfurniture/5/5_2.jpg',
                    'furniture/outdoorfurniture/5/5_3.jpg',
                    'furniture/outdoorfurniture/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'أرجوحة 3 مقاعد بمظلة من الدورا',
                'weight' => '195 *  115 / 198 سم',
                'color' => 'بيج',
                'capacity' => 3,
                'material' => 'Iron',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تتميز أرجوحة الدورا ذات 3 مقاعد بتصميم أنيق ومثالي لرفع مستوى أي مساحة خارجية.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/6/6_1.jpg',
                    'furniture/outdoorfurniture/6/6_2.jpg',
                    'furniture/outdoorfurniture/6/6_3.jpg',
                    'furniture/outdoorfurniture/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'كرسي هزاز اميلي - رمادي',
                'weight' => 'D 101 x W 97 x H 87 سم',
                'color' => 'رمادى',
                'capacity' => 1,
                'material' => 'نسج البوليستر',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يتميز كرسي الاسترخاء اميلي بتصميم أنيق، مثالي لاستكمال أي مساحة خارجية.',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/7/7_1.jpg',
                    'furniture/outdoorfurniture/7/7_2.jpg',
                    'furniture/outdoorfurniture/7/7_3.jpg',
                    'furniture/outdoorfurniture/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'جازيبو روما - بيج',
                'weight' => 'L 3 x W 4 x H 2.8 سم',
                'color' => 'بيج',
                'capacity' => 8,
                'material' => 'ألمونيوم',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'من الأفضل مبيعاً لدينا! هذا الجازيبو كبير الحجم لديه العديد من الوظائف! يأتي بهيكل سقف مزدوج من الألمنيوم والفولاذ للحصول على تهوية مناسبة وهي أيضًا مطلية بطلاء لحفظ الجودة من أجل المتانة التي ستستمر لسنوات عديدة قادمة. تأتي أيضاً مع ستائر وسقف مصنوع من نسيج البوليستر المقاوم للماء وخفيف الوزن وخالي من التجاعيد ويجف بسرعة كبيرة ، بالإضافة إلى شبكة لإبعاد المتسللين غير المرغوب فيهم!',
                'model' => 'أثاث خارجى',
                'product_image' => [
                    'furniture/outdoorfurniture/8/8_1.jpg',
                    'furniture/outdoorfurniture/8/8_2.jpg',
                    'furniture/outdoorfurniture/8/8_3.jpg',
                    'furniture/outdoorfurniture/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Outdoorfurniture {


            return Outdoorfurniture::firstOrCreate([
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
