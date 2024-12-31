<?php

namespace Database\Seeders;

use App\Models\Furniture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Collection;


class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([



        [
            'id' => 1,
            'title' => 'كرسي السفرة أماديو',
            'weight' => '51 *  47 / 94 سم',
            'color' => 'بنى',
            'capacity' => 1,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
            'content' => 'أضف لمسة من الأناقة إلى مساحة المعيشة الخاصة بك. اختر كرسي السفرة أماديو لتجربة جلوس مريحة ومريحة. سيعزز هذا الكرسي الكلاسيكي الأنيق الأجواء ويمنحك تجربة تناول طعام مثالية. الكرسي مصنوع من خشب عالي الجودة ومنجد بالجلد لمظهر فاخر. ستعزز أيضاً الأرجل السوداء القوية مع اللمسة الذهبية جمال هذا الكرسي.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/1/1_1.jpg',
                'furniture/furnitures/1/1_2.jpg',
                'furniture/furnitures/1/1_3.jpg',
                'furniture/furnitures/1/1_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 2,
            'title' => 'طاولة القهوة ترز - بلوط طبيعي',
            'weight' => '60 *  125 / 50 سم',
            'color' => 'بني فاتح',
            'capacity' => 4,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'سنة ضد عيوب الصناعة',
            'content' => 'أضف طاولة القهوة تيرزو المذهلة إلى غرفة المعيشة الخاصة بك. ستعمل هذه القطعة الفريدة والحديثة على رفع أجواء الديكورات الداخلية الخاصة بك وستترك انطباعاً رائع في أذهان ضيوفك! مصنوع من خشب متين مع إطار معدني قوي لقوة التحمل ويأتي بلون خشب البلوط الطبيعي.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/2/2_1.jpg',
                'furniture/furnitures/2/2_2.jpg',
                'furniture/furnitures/2/2_3.jpg',
                'furniture/furnitures/2/2_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 3,
            'title' => 'سافينو - وحدة تلفزيون علوية 55 بوصة',
            'weight' => '40 *  120 / 40 سم',
            'color' => 'بنى',
            'capacity' => 4,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'سنة ضد عيوب الصناعة',
            'content' => 'أنيقة وبسيطة تمامًا. وحدة التلفزيون هذه هي الاختيار الأمثل لغرفة معيشة ذات طابع عصري أنيق أو ريفي. يتيح لك التصميم المتقن تنظيم جميع معدات الصوت والفيديو الخاصة بك بشكل منظم ومريح مع إضافة الكثير من الأنماط إلى غرفتك. ومزيج الخشب الخفيف مقابل القاعدة المعدنية السوداء هو مزيج لن يخرج عن الموضة أبدًا.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/3/3_1.jpg',
                'furniture/furnitures/3/3_2.jpg',
                'furniture/furnitures/3/3_3.jpg',
                'furniture/furnitures/3/3_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 4,
            'title' => 'كرسي سفرة توماسو',
            'weight' => '52 *  46 / 84 سم',
            'color' => 'أبيض',
            'capacity' => 4,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'سنة ضد عيوب الصناعة',
            'content' => 'كرسي أنيق ورائع لتجربة مريحة. يساعدك كرسي السفرة توماسو البسيط والأنيق على الانغماس في تجربة فاخرة وأنيقة. الأرجل السوداء الرائعة المرتفعة والمطلية باللون الذهبي ستستكمل مساحة الجلوس البيضاء المنجدة بجلد عالي الجودة.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/4/4_1.jpg',
                'furniture/furnitures/4/4_2.jpg',
                'furniture/furnitures/4/4_3.jpg',
                'furniture/furnitures/4/4_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 5,
            'title' => 'وحدة تلفاز بمقاس حتى 55 إنش',
            'weight' => '134 *  35 / 69 سم',
            'color' => 'اسود',
            'capacity' => 4,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
            'content' => 'تعتبر طاولة وحدة التلفزيون هذه قطعة أثاث مذهلة ومثالية لأي منزل حديث',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/5/5_1.jpg',
                'furniture/furnitures/5/5_2.jpg',
                'furniture/furnitures/5/5_3.jpg',
                'furniture/furnitures/5/5_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 6,
            'title' => 'أريكة قماشية بثلاثة مقاعد',
            'weight' => '212 *  95 / 80 سم',
            'color' => 'بيج',
            'capacity' => 3,
            'material' => 'خشب',
            'upholstery_material' => 'Solid Wood',
            'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
            'content' => 'هذه الأريكة القماشية ذات الثلاثة مقاعد تعد قطعة أثاث عالية الجودة صُممت لتدوم. وهيكل الأريكة مصنوع من الخشب الصلب مما يضمن متانة الأريكة وتحملها للإستخدام المنتظم. ويوفر الحزام المطاطي شكل أريكة صلبًا يحافظ على شكله بمرور الوقت ويمنع الترهل.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/6/6_1.jpg',
                'furniture/furnitures/6/6_2.jpg',
                'furniture/furnitures/6/6_3.jpg',
                'furniture/furnitures/6/6_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 7,
            'title' => 'روما - كنبة مقعد واحد',
            'weight' => '79 *  82 / 97 سم',
            'color' => 'بنى',
            'capacity' => 1,
            'material' => 'خشب',
            'upholstery_material' => 'Solid Wood',
            'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
            'content' => 'انغمس في تجربة فاخرة مع أريكة روما ذات المقعد الواحد. مصممة لتضيف احساس بالفخامة في منزلك. الأنماط الأنيقة لهذه الأريكة تجعلها تحفة رائعة لأي غرفة معيشة. هذا المقعد الواحد عبارة عن قماش بني منقوش يتناسب إلى حد كبير مع الأريكة ذات الثلاثة مقاعد من نفس العائلة.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/7/7_1.jpg',
                'furniture/furnitures/7/7_2.jpg',
                'furniture/furnitures/7/7_3.jpg',
                'furniture/furnitures/7/7_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 8,
            'title' => 'وحدة تلفاز من إيفرا 55 إنش',
            'weight' => '120 *  37 / 40 سم',
            'color' => 'رمادى',
            'capacity' => 10,
            'material' => 'خشب',
            'upholstery_material' => '-',
            'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
            'content' => 'أضف لمسة من المرح وشخصية فريدة إلى مساحة معيشتك مع وحدة التلفزيون هذه. يمكن أن تستوعب ما يصل إلى تلفزيون 55 بوصة وتتميز بمساحة تخزين واسعة لجميع احتياجات تخزين معدات الصوت والفيديو. تفاصيل التصميم على أبواب الخزانة المغلقة تعزز المظهر المرئي وتضيف سحرًا للوحدة وبالتالي مساحة المعيشة الخاصة بك.',
            'model' => 'أثاث',
            'product_image' => [
                'furniture/furnitures/8/8_1.jpg',
                'furniture/furnitures/8/8_2.jpg',
                'furniture/furnitures/8/8_3.jpg',
                'furniture/furnitures/8/8_4.jpg',
            ],
            'created_at' => now(),
            'updated_at' => now(),
        ],

        ])
        ->each(function ($record): Furniture {


            return Furniture::firstOrCreate([
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
