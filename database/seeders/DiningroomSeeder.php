<?php

namespace Database\Seeders;

use App\Models\Furniture\Diningroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class DiningroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'طقم طاولة سفرة خشبي 1+6',
                'weight' => '150 *  90 / 75 سم',
                'color' => 'بنى',
                'capacity' => 6,
                'material' => 'خشب هندسي',
                'upholstery_material' => 'جلد صناعي',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'طقم طاولة السفرة 1 + 6 أنيق وعصري ومثالي لأي شخص يحب استضافة حفلات العشاء أو ببساطة الاستمتاع بوجبات الطعام مع العائلة والأصدقاء.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/1/1_1.jpg',
                    'furniture/diningroom/1/1_2.jpg',
                    'furniture/diningroom/1/1_3.jpg',
                    'furniture/diningroom/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'توليدو - طاولة مشروبات مقعدين',
                'weight' => 'L 108 X W 60 X H 90.8 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'Wood, Rubber Wood',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'بيضاء وأنيقة ، صنع في ماليزيا. طقم بار "توليدو" لدينا ريفية وحديثة. تحتوي على خزانة جانبية مدمجة من طبقتين لحفظ الزجاجا. مع وجود كرسيين بهيكل جانبي لإبراز متانة المنتج.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/2/2_1.jpg',
                    'furniture/diningroom/2/2_2.jpg',
                    'furniture/diningroom/2/2_3.jpg',
                    'furniture/diningroom/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'طقم طعام ريان 1+6 - رمادي',
                'weight' => 'L 150 X W 95 X H 75 سم',
                'color' => 'رمادي',
                'capacity' => 6,
                'material' => 'زجاج مقوّى',
                'upholstery_material' => 'معدن',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'طقم طاولة السفرة 1 + 6 تعد اختيار أنيق وعصري لأي غرفة طعام. طاولة الطعام مصنوعة من زجاج مقسّى عالي الجودة وتتميز بلمسات رخامية سوداء أنيقة تضيف لمسة من الأناقة إلى التصميم.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/3/3_1.jpg',
                    'furniture/diningroom/3/3_2.jpg',
                    'furniture/diningroom/3/3_3.jpg',
                    'furniture/diningroom/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'طقم سفرة كايدن 1+8',
                'weight' => 'L 240 x W 100 x H 75 سم',
                'color' => 'بنى',
                'capacity' => 8,
                'material' => 'الخشب الصلب',
                'upholstery_material' => 'الخشب الصلب',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'تتميز مجموعة الطعام Cayden 1+8 بتصميم ريفي مع تفاصيل كلاسيكية تتناسب مع مجموعة متنوعة من أنماط الديكور الداخلي.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/4/4_1.jpg',
                    'furniture/diningroom/4/4_2.jpg',
                    'furniture/diningroom/4/4_3.jpg',
                    'furniture/diningroom/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'طقم سفرة من الرخام من برودي',
                'weight' => '135 *  46 / 91 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'رخام',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تم تصميم خادم الطعام الرخامي من Brody بحيث يحتوي على مساحة كافية لاستيعاب أي احتياجات خاصة بالمطبخ، ويمكن تخزين الأكواب والصحون الفاخرة في الأرفف للضيوف المميزين، كما توجد مساحة كافية في الأعلى لعرض أي قطع ديكور فاخرة. كما أنها متعددة الاستخدامات بما يكفي بحيث لا تحتاج حتى إلى استخدامها لعرض أطباق التقديم الخاصة بك.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/5/5_1.jpg',
                    'furniture/diningroom/5/5_2.jpg',
                    'furniture/diningroom/5/5_3.jpg',
                    'furniture/diningroom/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'خزانة من اندراي',
                'weight' => '120 *  43 / 140 سم',
                'color' => 'رمادي',
                'capacity' => 4,
                'material' => 'MDF',
                'upholstery_material' => 'خشب الصنوبر / الاستنلس ستيل / قماش / كتان',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'بفضل شكلها الأنيق الناعم، تجمع خزانة النبيذ هذه من أندريه بين الطراز القديم والريفي. صُنعت في ماليزيا، وهي مصنوعة هيكليًا من الخشب الهندسي مع تشطيب خشبي رقيق لمظهر بصري أكثر نعومة، وتتضمن طاولة ورفوف عرض متعددة الطبقات وفتحات نبيذ وخزانة لاستيعاب أغراض البار الخاصة بك. كما تحتوي على سكة أمان لزجاجات النبيذ لمنعها من السقوط! متوفرة باللون الرمادي/البيج والرمادي/ونجي.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/6/6_1.jpg',
                    'furniture/diningroom/6/6_2.jpg',
                    'furniture/diningroom/6/6_3.jpg',
                    'furniture/diningroom/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'طقم طاولة سفرة 1+6',
                'weight' => 'L 150 x W 90 x H 75 سم',
                'color' => 'متعدد الالوان',
                'capacity' => 6,
                'material' => 'زجاج',
                'upholstery_material' => 'معدن',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'أضف لمسة من الأناقة إلى غرفة طعامك باختيار مجموعة الطعام 6+1 هذه. فهي تتضمن طاولة بسيطة مصممة بسطح زجاجي وستة كراسي رائعة بألوان جذابة. الهيكل متين ومصنوع من أجود أنواع الأخشاب الهندسية التي تضمن سنوات من الأناقة والوظائف.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/7/7_1.jpg',
                    'furniture/diningroom/7/7_2.jpg',
                    'furniture/diningroom/7/7_3.jpg',
                    'furniture/diningroom/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'طقم سفرة توباغو 1+8',
                'weight' => 'L 200 x W 100 x H 77 سم',
                'color' => 'بنى',
                'capacity' => 8,
                'material' => 'Rubber Wood',
                'upholstery_material' => 'قماش',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'صُممت هذه المجموعة المبهجة لتناول الطعام لاستيعاب ما يصل إلى ثمانية أشخاص، وستجعلك تستمتع بأوقات تناول الطعام الممتعة والمريحة مع أحبائك. صُنعت الكراسي من مواد عالية الجودة، كما أنها مزودة بتنجيد متباين لإضفاء سحر مبهج وضمان تجربة جلوس مريحة. بشكل عام، هذه المجموعة سهلة التنظيف ومصممة لتكمل أنماط المنزل المتعددة.',
                'model' => 'غرفة طعام',
                'product_image' => [
                    'furniture/diningroom/8/8_1.jpg',
                    'furniture/diningroom/8/8_2.jpg',
                    'furniture/diningroom/8/8_3.jpg',
                    'furniture/diningroom/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Diningroom {


            return Diningroom::firstOrCreate([
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
