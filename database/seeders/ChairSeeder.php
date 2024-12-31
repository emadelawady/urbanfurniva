<?php

namespace Database\Seeders;

use App\Models\Furniture\Livingroom\Chair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;

class ChairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'كرسي بذراعين, Kilanda',
                'weight' => '76 * 78 / 80 سم',
                'color' => 'بيج فاتح',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'الحجم الأنيق والتصميم البسيط والأنيق يجعل مجموعة ROCKSJÖN مناسبة تمامًا لمعظم الغرف. اجمعي بين الوظائف المختلفة للمجموعة أو نسّقي مع أثاث آخر على الطراز التقليدي.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/1/1_1.jpg',
                    'furniture/livingroom/chair/1/1_2.jpg',
                    'furniture/livingroom/chair/1/1_3.jpg',
                    'furniture/livingroom/chair/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'كرسي بذراعين, Kelinge رمادي- تركواز',
                'weight' => '46 * 64 / 76 سم',
                'color' => 'رمادى',
                'capacity' => 1,
                'material' => 'خشب زان',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'كرسي EKENÄSET يضفي على الغرفة مظهراً يحمل عبق الماضي، وهو مستوحى من التصميم الاسكندنافي في الخمسينيات. ينسجم مظهر الكرسي الكلاسيكي بسهولة في أي مكان في المنزل - ويمنحك مقاعد متينة وقوية لسنوات عديدة.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/2/2_1.jpg',
                    'furniture/livingroom/chair/2/2_2.jpg',
                    'furniture/livingroom/chair/2/2_3.jpg',
                    'furniture/livingroom/chair/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'كرسي بذراعين, Knisa رمادي فاتح',
                'weight' => '72 * 99 / 36 سم',
                'color' => 'رمادى',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'أنشئي مقاعد مريحة في جميع أنحاء المنزل مع الكرسي بذراعين ÅRSUNDA خفيف الوزن. المظهر النظيف والموحد يناسب كل مكان - ومسند الظهر الداعم اللطيف يتمتع بمرونة مريحة.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/3/3_1.jpg',
                    'furniture/livingroom/chair/3/3_2.jpg',
                    'furniture/livingroom/chair/3/3_3.jpg',
                    'furniture/livingroom/chair/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'كرسي بجناحين, Kelinge بيج',
                'weight' => '82 * 101 / 54 سم',
                'color' => 'بيج',
                'capacity' => 4,
                'material' => 'خشب وبوليستر',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'بحاجة إلى حضن حنون؟ يمتلك كرسي STRANDMON بذراعين على شعور إحتضان بفضل مسند الظهر العالي، ومساند اليد المدورة، وايضاً الخطوط الناعمة بتنجيد مُرحب. مظهر تقليدي مع الراحة العصرية للعديد من اللحظات الدافئة.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/4/4_1.jpg',
                    'furniture/livingroom/chair/4/4_2.jpg',
                    'furniture/livingroom/chair/4/4_3.jpg',
                    'furniture/livingroom/chair/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'كرسي بذراعين مع مسند قدمين, Skiftebo أصفر',
                'weight' => '75 * 47 / 106 سم',
                'color' => 'أصفر',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يتميز STRANDMON بأناقته الخالدة مع راحة عصرية للعديد من اللحظات الدافئة. يوفر الكرسي الشعور بالإحتواء والنعومة، ومسند القدمين مريح للغاية لقدميك- أو يمكنك استخدامه كمقعد إضافي للضيوف.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/5/5_1.jpg',
                    'furniture/livingroom/chair/5/5_2.jpg',
                    'furniture/livingroom/chair/5/5_3.jpg',
                    'furniture/livingroom/chair/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'كرسي بذراعين, Hakebo رمادي-أخضر',
                'weight' => '88 * 38 / 126 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يمكن أن يصبح هذا الكرسي مكانك المفضل في المنزل بسهولة. كرسي EKTORP واسع ومريح مع وسائد طرية داعمة - والغطاء أيضًا قابل للنزع والغسل في الغسالة.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/6/6_1.jpg',
                    'furniture/livingroom/chair/6/6_2.jpg',
                    'furniture/livingroom/chair/6/6_3.jpg',
                    'furniture/livingroom/chair/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'كرسي بذراعين, Skulsta أسود',
                'weight' => '71 *  66 / 73 سم',
                'color' => 'أسود',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تصميم جريء بأشكال دائرية ساحرة. الكرسي بذراعين HERRÅKRA، مصنوع من قماش Skulsta المتين ويناسب غرفة المعيشة ومنطقة الاستقبال بمكتبك.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/7/7_1.jpg',
                    'furniture/livingroom/chair/7/7_2.jpg',
                    'furniture/livingroom/chair/7/7_3.jpg',
                    'furniture/livingroom/chair/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'كرسي بذراعين, بتولا/Tibbleby بيج/رمادي',
                'weight' => '69 * 70 / 84 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'إحساس بالاتقان والتصميم الرائع. يناسب الكرسي بذراعين PERSBOL المكان الذي تريدين إنشاء زوايا فيه لقضاء بعض الوقت مع العائلة أو الاستمتاع ببعض الوقت اللطيف. مظهر كلاسيكي يزداد جمالًا بمرور الوقت.',
                'model' => 'كراسى',
                'product_image' => [
                    'furniture/livingroom/chair/8/8_1.jpg',
                    'furniture/livingroom/chair/8/8_2.jpg',
                    'furniture/livingroom/chair/8/8_3.jpg',
                    'furniture/livingroom/chair/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Chair {


            return Chair::firstOrCreate([
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
