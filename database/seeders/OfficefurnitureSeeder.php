<?php

namespace Database\Seeders;

use App\Models\Furniture\Officefurniture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class OfficefurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'طاولة كمبيوتر ميلي',
                'weight' => 'L 40 x W 80 x H 69-90 سم',
                'color' => 'أبيض',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'طاولة الكمبيوتر ميلي مصممة لراحتك. قم بتحويل أي مكان في منزلك إلى مكتب منزلي مؤقت باستخدام طاولة الكمبيوتر هذه ذات القاعدة المتدحرجة. إنه مصنوع من مواد عالية الجودة وله لون أبيض أنيق وعصري يرفع من تجربة عملك. يتوفر صفَّا التخزين الإضافيان في متناول يديك لتخزين الأدوات المكتبية والكتب والعناصر الأخرى ذات الصلة.',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/1/1_1.jpg',
                    'furniture/officefurniture/1/1_2.jpg',
                    'furniture/officefurniture/1/1_3.jpg',
                    'furniture/officefurniture/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'طاولة مكتب داريو',
                'weight' => '100 *  50 / 75 سم',
                'color' => 'بني فاتح',
                'capacity' => 1,
                'material' => 'wood',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'الاختيار الأمثل لمكتبك المنزلي! تعد طاولة مكتب داريو مع مساحة التخزين إضافة مثالية. مصنوع من خشب عالي الجودة ويتميز بلوط طبيعي ولون أبيض. تأتي مع ثلاثة أدراج تساعد على توفير مساحة تخزين كبيرة. يساعد الهيكل مع الأرجل القوية في الحفاظ على وضعية الجسم المثالية أثناء العمل أو الدراسة. أضف طاولة الدراسة الممتازة هذه لإكمال إعداد مكتبك المنزلي.',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/2/2_1.jpg',
                    'furniture/officefurniture/2/2_2.jpg',
                    'furniture/officefurniture/2/2_3.jpg',
                    'furniture/officefurniture/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'طاولة مكتب كامين',
                'weight' => '45 *  120 / 72 سم',
                'color' => 'أبيض',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'طاولة مكتب كامين ضرورية لمكتبك في المنزل أو للدراسة في المنزل! إنه مصنوع من الخشب عالي الجودة ويأتي بلمسة نهائية بيضاء أنيقة لإضافة لمسة عصرية إلى غرفتك. يتجنب اللون الأبيض العادي أي مشتتات أثناء العمل أو الدراسة. أضف طاولة الدراسة الممتازة هذه لإكمال إعداد مكتبك المنزلي.',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/3/3_1.jpg',
                    'furniture/officefurniture/3/3_2.jpg',
                    'furniture/officefurniture/3/3_3.jpg',
                    'furniture/officefurniture/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'ليلي - طاولة مكتب',
                'weight' => '85 *  40 / 72 سم',
                'color' => 'أبيض',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'مثالي باللون الأبيض ، يتحقق مكتب ليلي المكتبي لدينا من جميع النقاط عندما يتعلق الأمر بالأناقة والعملية. يُعد التصميم الأنيق مثاليًا للمساحات الصغيرة والكبيرة على حد سواء ، كما أن الرفوف على الجانب تمنح المكتب مظهرًا فريدًا وحديثًا. عزز إنتاجيتك مع هذا المكتب الفريد من نوعه.',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/4/4_1.jpg',
                    'furniture/officefurniture/4/4_2.jpg',
                    'furniture/officefurniture/4/4_3.jpg',
                    'furniture/officefurniture/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'إيرفا - وحدة تلفزيون علوية بحجم حتى 55 بوصة',
                'weight' => '100 *  60 / 72 سم',
                'color' => 'أبيض',
                'capacity' => 1,
                'material' => 'حشب',
                'upholstery_material' => '',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'مساحة صغيرة؟ لا داعي للقلق! يعد مكتب بيتا المكتبي الصغير الحل الأمثل لمكتبك المنزلي ، خاصةً إذا كانت لديك قيود على المساحة. تجلس بيتا بشكل ذكي في أي مساحة في منزلك مع أرجلها المعدنية السوداء الجميلة والتشطيبات الخشبية الفاتحة. تتميز الطاولة بدرجين لتخزين أدواتك المكتبية ورف مفتوح. يعتبر مكتب بيتا مثاليًا لأنماط داخلية متعددة.',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/5/5_1.jpg',
                    'furniture/officefurniture/5/5_2.jpg',
                    'furniture/officefurniture/5/5_3.jpg',
                    'furniture/officefurniture/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'طاولة مكتب اميتي - توباكو',
                'weight' => '90 *  40 / 75 سم',
                'color' => 'بني',
                'capacity' => 1,
                'material' => 'حشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'بسيطة وأنيقة وعملية. طاولة مكتب Amity رائعة ليس فقط لجميع أنماط الديكور الداخلي، بل وأيضًا للمساحات الصغيرة. لا يمكنك أن تخطئ باختيارها!',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/6/6_1.jpg',
                    'furniture/officefurniture/6/6_2.jpg',
                    'furniture/officefurniture/6/6_3.jpg',
                    'furniture/officefurniture/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'ناسوس - طاولة مكتب - خشب بلوط',
                'weight' => '100 *  60 / 97 سم',
                'color' => 'بنى',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تم تصميم مكتب ناسوس لجذب النحل العامل الذي يفضل الحد الأدنى من الجمالية. إنها مثالية للمساحات الصغيرة ومصنوعة من خشب هندسي عالي الجودة مع قاعدة معدنية ستجعل الطاولة قوية ومتينة. تحتوي الطاولة أيضًا على درج ورفوف متعددة لتخزين أدواتك المكتبية. يعتبر الرف العلوي مكانًا رائعًا لإضافة النباتات أو قطع الديكور الأخرى أيضًا!',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/7/7_1.jpg',
                    'furniture/officefurniture/7/7_2.jpg',
                    'furniture/officefurniture/7/7_3.jpg',
                    'furniture/officefurniture/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'طاولة مكتب أميتي - لون الجوز',
                'weight' => '90 *  40 / 75 سم',
                'color' => 'بني',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'بسيطة وأنيقة وعملية. طاولة مكتب Amity رائعة ليس فقط لجميع أنماط الديكور الداخلي، بل وأيضًا للمساحات الصغيرة. لا يمكنك أن تخطئ باختيارها!',
                'model' => 'أثاث مكتبى',
                'product_image' => [
                    'furniture/officefurniture/8/8_1.jpg',
                    'furniture/officefurniture/8/8_2.jpg',
                    'furniture/officefurniture/8/8_3.jpg',
                    'furniture/officefurniture/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Officefurniture {


            return Officefurniture::firstOrCreate([
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
