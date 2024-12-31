<?php

namespace Database\Seeders;

use App\Models\Furniture\Livingroom\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        Collection::make([

            [
                'id' => 1,
                'title' => 'طاولة جانبية, فحمي',
                'weight' => '63 *  53 / 63 سم',
                'color' => 'غحمى , متعدد الألوان',
                'capacity' => 1,
                'material' => 'فولاذ, طلاء راتنج/بوليستر',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يمكنك تحويل هذه الطاولة المتعددة الوظائف بسرعة من طاولة جانبية مرتفعة قليلاً إلى طاولة قهوة منخفضة لتناسب جميع الأنشطة المختلفة التي تتم حول الكنبة.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/1/1_1.jpg',
                    'furniture/livingroom/Table/1/1_2.jpg',
                    'furniture/livingroom/Table/1/1_3.jpg',
                    'furniture/livingroom/Table/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'طاولة قهوة, أبيض',
                'weight' => '118 *  78 / 45 سم',
                'color' => 'ابيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'رف منفصل لتخزين المجلات وغيرها؛ يساعدك في إبقاء أشيائك منظمة ويخلي سطح الطاولة من الأشياء.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/2/2_1.jpg',
                    'furniture/livingroom/Table/2/2_2.jpg',
                    'furniture/livingroom/Table/2/2_3.jpg',
                    'furniture/livingroom/Table/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'حامل لابتوب, أسود-بني',
                'weight' => '35 *  55 / 65 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'فولاذ, طلاء راتنج/بوليستر',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'من الزجاج المقسّى والمعدن، وهي مواد شديدة التحمّل تعطي شعوراً بالبهجة وعدم التقيّد.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/3/3_1.jpg',
                    'furniture/livingroom/Table/3/3_2.jpg',
                    'furniture/livingroom/Table/3/3_3.jpg',
                    'furniture/livingroom/Table/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'مجموعة طاولات، طقم من 2',
                'weight' => '75 *  60 / 45 سم',
                'color' => 'رمادى',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'تساعدك هاتان الطاولتان خفيفتا الوزن على استخدام المساحة الأرضية المحدودة بطريقة ذكية حيث يمكن وضعهما معًا جزئيًا، أو بشكل منفصل أو دفعهما معًا بالكامل لتوفير المساحة.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/4/4_1.jpg',
                    'furniture/livingroom/Table/4/4_2.jpg',
                    'furniture/livingroom/Table/4/4_3.jpg',
                    'furniture/livingroom/Table/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'مجموعة طاولات، طقم من 2',
                'weight' => '235 *  83 / 105 سم',
                'color' => 'أسود',
                'capacity' => 4,
                'material' => 'زجاج مقسّى',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'أسطح الطاولات من الزجاج المقسّى وهي مقاومة للبقع ومن السهل المحافظة على نظافتها.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/5/5_1.jpg',
                    'furniture/livingroom/Table/5/5_2.jpg',
                    'furniture/livingroom/Table/5/5_3.jpg',
                    'furniture/livingroom/Table/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'طاولة قهوة, شكل السنديان',
                'weight' => '40 *  90 / 5 سم',
                'color' => 'خشبى',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'الشكل الهندسي الأنيق يضفي طابعًا مميزًا على الغرفة ويجعل طاولة القهوة ملفتة للنظر.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/6/6_1.jpg',
                    'furniture/livingroom/Table/6/6_2.jpg',
                    'furniture/livingroom/Table/6/6_3.jpg',
                    'furniture/livingroom/Table/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'طاولة جانبية, أبيض',
                'weight' => '55 *  55 / 45 سم',
                'color' => 'أبيض',
                'capacity' => 3,
                'material' => 'خشب مضغوط, حشوة من ورق الكرتون المقوى (معاد التدوير)',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'من السهل تنسيق طاولة LACK البيضاء هذه مع بقية الأثاث. وبفضل بنيتها الفريدة، فهي سهلة التركيب والرفع والنقل - كما من الممكن الحفاظ على سعرها منخفضاً، وبالتالي ترتفع معنوياتك.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/7/7_1.jpg',
                    'furniture/livingroom/Table/7/7_2.jpg',
                    'furniture/livingroom/Table/7/7_3.jpg',
                    'furniture/livingroom/Table/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'طاولة جانبية, داخلي/خارجي',
                'weight' => '46 *  60 / 68 سم',
                'color' => 'رمادى فاتح',
                'capacity' => 3,
                'material' => 'فولاذ, طلاء بوليستر.',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'أنيقة وخفيفة الوزن ومتينة. هذه الطاولة الجانبية باللون البيج هي مزيج مثالي من الوظيفة والتصميم. رائعة لوضعها بجوار الكرسي بذراعين في غرفة الجلوس - ويسهل تحريكها عندما تريدين.',
                'model' => 'طاولات',
                'product_image' => [
                    'furniture/livingroom/Table/8/8_1.jpg',
                    'furniture/livingroom/Table/8/8_2.jpg',
                    'furniture/livingroom/Table/8/8_3.jpg',
                    'furniture/livingroom/Table/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Table {


            return Table::firstOrCreate([
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
