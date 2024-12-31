<?php

namespace Database\Seeders;

use App\Models\Furniture\Livingroom\Cupboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class CupboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'خزانة جانبية, أبيض',
                'weight' => '140 *  46 / 84 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'خشب مضغوط, ورق فويل, حواف بلاستيكية',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'صُممت ليتم استخدامها بمفردها في جميع أنحاء المنزل وهي أيضًا ملائمة تمامًا مع الأثاث الآخر في مجموعة HAUGA، إما لتنسيق النمط أو صنع حلول تخزين أكبر.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/1/1_1.jpg',
                    'furniture/livingroom/cupboard/1/1_2.jpg',
                    'furniture/livingroom/cupboard/1/1_3.jpg',
                    'furniture/livingroom/cupboard/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'خزانة, صنوبر',
                'weight' => '80 *  30 / 83 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'الخشب الصلب الغير معالج هو مادة طبيعية متينة، حيث يصبح أكثر متانة، تحملاً وسهولة في العناية إذا تم معالجة سطحه بالزيت أو الشمع.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/2/2_1.jpg',
                    'furniture/livingroom/cupboard/2/2_2.jpg',
                    'furniture/livingroom/cupboard/2/2_3.jpg',
                    'furniture/livingroom/cupboard/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'خزانة مع أبواب, أبيض',
                'weight' => '78 *  41 / 95 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'أرفف قابلة للتعديل، لذا يمكنك تخصيص المساحة حسب الحاجة.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/3/3_1.jpg',
                    'furniture/livingroom/cupboard/3/3_2.jpg',
                    'furniture/livingroom/cupboard/3/3_3.jpg',
                    'furniture/livingroom/cupboard/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'خزانة بأبواب قابلة للطي, بني غامق مصبوغ',
                'weight' => '121 *  50 / 135 سم',
                'color' => 'بنى غامق',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'ينبغي بطبيعة الحال أن يكون منزلك مكاناً آمناً لجميع أفراد العائلة. لهذا السبب يتم تضمين تركيبات الأمان حتى تتمكني من تثبيت وحدة التخزين على الحائط.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/4/4_1.jpg',
                    'furniture/livingroom/cupboard/4/4_2.jpg',
                    'furniture/livingroom/cupboard/4/4_3.jpg',
                    'furniture/livingroom/cupboard/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'خزانة مع أبواب, أسود-أزرق',
                'weight' => '38 *  90 / 70 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تم تصميم الأثاث في مجموعة SKRUVBY ليتناسب مع بعضه البعض. شكّلي ونسّقي كما يحلو لك أو استخدمي كل قطعة أثاث كوحدة مستقلة.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/5/5_1.jpg',
                    'furniture/livingroom/cupboard/5/5_2.jpg',
                    'furniture/livingroom/cupboard/5/5_3.jpg',
                    'furniture/livingroom/cupboard/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'خزانة بأبواب زجاجية مطوية',
                'weight' => '121 * 50 / 135 سم',
                'color' => 'بنى غامق',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'قم بإنشاء منزل متناسق من خلال الجمع بين هذه الخزانة وقطع الأثاث الأخرى من مجموعة IDANÄS.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/6/6_1.jpg',
                    'furniture/livingroom/cupboard/6/6_2.jpg',
                    'furniture/livingroom/cupboard/6/6_3.jpg',
                    'furniture/livingroom/cupboard/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'خزانة مع أدراج., أبيض',
                'weight' => '49 * 38 / 101 سم',
                'color' => 'أبيض',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'كلّ شيء في مكانه. توفر خزانة GREÅKER التصميم التقليدي والوظائف الحديثة. كفاءة في التخزين مع أدراج ورف حيث يمكن وضعها في غرف النوم أو الردهة أو حتى غرفة المعيشة.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/7/7_1.jpg',
                    'furniture/livingroom/cupboard/7/7_2.jpg',
                    'furniture/livingroom/cupboard/7/7_3.jpg',
                    'furniture/livingroom/cupboard/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'تشكيلة تخزين, أسود-أزرق',
                'weight' => '38 * 140 / 130 سم',
                'color' => 'اسود',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تتمتع مجموعة SKRUVBY بمظهر تقليدي مع وحدات تخزين مستقلة يمكن تنسيقها بسهولة. ويعمل هذا الحل المرن والعملي أيضًا في غرفة المعيشة وكذلك في منطقة تناول الطعام.',
                'model' => 'خزائن',
                'product_image' => [
                    'furniture/livingroom/cupboard/8/8_1.jpg',
                    'furniture/livingroom/cupboard/8/8_2.jpg',
                    'furniture/livingroom/cupboard/8/8_3.jpg',
                    'furniture/livingroom/cupboard/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Cupboard {


            return Cupboard::firstOrCreate([
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
