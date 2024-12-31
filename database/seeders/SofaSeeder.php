<?php

namespace Database\Seeders;

use App\Models\Sofa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class SofaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'مدريد كنب 4 مقاعد 280 سم بني وودي',
                'weight' => '280 *  105 / 80 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'MDF',
                'upholstery_material' => 'polyester , قطن',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'استمتع بأناقة وجمال التصميم مع كنب مدريد المميز الذي يجمع بين الجودة العالية والتصميم العصري. بتصميم مريح يتناسب مع احتياجات العائلة،تم تصنيع هيكل الكنب باستخدام أجود أنواع الخشب، مما يضمن المتانة والقوة لتحمل الاستخدام اليومي لسنوات طويلة. يوفر مساحة جلوس واسعة تتسع لأربعة أشخاص، ليكون الاختيار المثالي لغرفة المعيشة أو الاستقبال.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/1/1_1.jpg',
                    'furniture/livingroom/sofa/1/1_2.jpg',
                    'furniture/livingroom/sofa/1/1_3.jpg',
                    'furniture/livingroom/sofa/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'سوهو كنب رباعي وودي',
                'weight' => '265 *  96 / 77 سم',
                'color' => 'كريم',
                'capacity' => 4,
                'material' => 'plywood',
                'upholstery_material' => 'قطن | بوليستر',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'أضف لمسة من الأناقة والراحة إلى منزلك مع كنبة سوهو الرباعية الفاخرة. تتميز هذه الكنبة بتصميمها العصري والجذاب الذي يجمع بين الجمال والوظائف المتعددة، لتوفر لك تجربة جلوس مميزة. مصنوعة من الخشب الرقائقي الصلب.وتتميز بنسيج ناعم من القطن والبوليستر كما تضفي المقاعد المبطنة بالفوم ووسائد الظهر مظهرا وملمسا رائعا مزيدا من الراحة .',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/2/2_1.jpg',
                    'furniture/livingroom/sofa/2/2_2.jpg',
                    'furniture/livingroom/sofa/2/2_3.jpg',
                    'furniture/livingroom/sofa/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'زجنا كنب رباعي وودي',
                'weight' => '276 *  96 / 68 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'نبوك',
                'upholstery_material' => 'ألياف بوليستر , فوم',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'استمتع بالراحة والأناقة مع كنبة زجنا الرباعية الفاخرة المصنوعة من أخشاب الزان عالية الجودة. تتميز هذه الكنبة بتصميمها الأنيق والعصري، وتأتي بمنجد فاخر من القماش باللون البني الجذاب. إضافة إلى ذلك، تحتوي الكنبة على خداديات إضافية توفر الدعم اللازم وتعزز الراحة أثناء الجلوس. اجعل منزلك أكثر أناقة واستمتع بتجربة استرخاء لا تضاهى مع كنبة زجنا الفاخرة.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/3/3_1.jpg',
                    'furniture/livingroom/sofa/3/3_2.jpg',
                    'furniture/livingroom/sofa/3/3_3.jpg',
                    'furniture/livingroom/sofa/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'تورينو كنب ثنائي جلد بيج غامق وودي',
                'weight' => '171 *  98 / 68 سم',
                'color' => 'بيج غامق',
                'capacity' => 4,
                'material' => 'جلد',
                'upholstery_material' => 'أسفنج , ألياف',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'كنب تورينو الثنائي هو الخيار الأمثل لكل من يبحث عن الأناقة والراحة في قطعة واحدة. هذا الكنب الرائع يجمع بين التصميم العصري والجودة العالية، ليمنحك تجربة جلوس لا مثيل لها. بفضل الإطار الداخلي الخشبي القوي المصنوع من أجود أنواع الأخشاب الصلبة، والارجل المعدنية الصلبة ,أضف الي ذلك التنجيد من الجلد الناعم مع الحشو الاسفنجي المريح,كل ذلك يقدم لك دعمًا مستمرًا وقوة تحمل لسنوات طويلة.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/4/4_1.jpg',
                    'furniture/livingroom/sofa/4/4_2.jpg',
                    'furniture/livingroom/sofa/4/4_3.jpg',
                    'furniture/livingroom/sofa/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'نيو لونا كنب ثلاثي وودي',
                'weight' => '235 *  83 / 105 سم',
                'color' => 'بيج',
                'capacity' => 4,
                'material' => 'MDF',
                'upholstery_material' => 'polyester , قطن',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'كنب ثلاثي نيو لونا نمط معاصر وكلاسيكي يجتمع معًا بطريقة جميلة ، هذه الأريكة ذات اللون البيج الانيق ،بمسند ظهر مريح من الكتان والمخمل ذا الارجل الخشبية لتنعم براحة لا مثيل لها .',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/5/5_1.jpg',
                    'furniture/livingroom/sofa/5/5_2.jpg',
                    'furniture/livingroom/sofa/5/5_3.jpg',
                    'furniture/livingroom/sofa/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'كنت كنب ثنائي وودي',
                'weight' => '202 *  100 / 72 سم',
                'color' => 'كريم',
                'capacity' => 4,
                'material' => 'MDF',
                'upholstery_material' => 'خشب الصنوبر / الاستنلس ستيل / قماش / كتان',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'سيضفي الكنب الثنائي طابعاً عصرياً بتفاصيله المميزة، يأتي بأذرع ذات الارتفاع المنخفض، و أرجل معدنية مصممة بشكل خاص يضفي رونقاً خاص الى منزلك .',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/6/6_1.jpg',
                    'furniture/livingroom/sofa/6/6_2.jpg',
                    'furniture/livingroom/sofa/6/6_3.jpg',
                    'furniture/livingroom/sofa/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'سوهو كنب ثلاثي وودي',
                'weight' => '220 *  96 / 77 سم',
                'color' => 'كريم',
                'capacity' => 3,
                'material' => 'plywood',
                'upholstery_material' => 'قطن | بوليستر',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'عززي الجاذبية العصرية لغرفة معيشتك مع هذه الكنبة المصنوعة من الخشب الرقائقي الصلب. سوهو كنب ثلاثي يتميز بنسيج ناعم من القطن والبوليستر كما تضفي المقاعد المبطنة بالفوم ووسائد الظهر مظهرا وملمسا رائعا مزيدا من الراحة .',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/7/7_1.jpg',
                    'furniture/livingroom/sofa/7/7_2.jpg',
                    'furniture/livingroom/sofa/7/7_3.jpg',
                    'furniture/livingroom/sofa/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'تورينو كنب ثلاثي جلد بيج غامق وودي',
                'weight' => '221 *  98 / 68 سم',
                'color' => 'بيج غامق',
                'capacity' => 3,
                'material' => 'plywood',
                'upholstery_material' => 'جلد',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'كنب تورينو الثلاثي هو الخيار الأمثل لكل من يبحث عن الأناقة والراحة في قطعة واحدة. هذا الكنب الرائع يجمع بين التصميم العصري والجودة العالية، ليمنحك تجربة جلوس لا مثيل لها. بفضل الإطار الخشبي القوي المصنوع من أجود أنواع الأخشاب الصلبة، والارجل المعدنية الصلبة ,أضف الي ذلك التنجيد من الجلد الناعم مع الحشو الاسفنجي المريح,كل ذلك يقدم لك دعمًا مستمرًا وقوة تحمل لسنوات طويلة.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/sofa/8/8_1.jpg',
                    'furniture/livingroom/sofa/8/8_2.jpg',
                    'furniture/livingroom/sofa/8/8_3.jpg',
                    'furniture/livingroom/sofa/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Sofa {


            return Sofa::firstOrCreate([
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
