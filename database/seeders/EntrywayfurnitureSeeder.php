<?php

namespace Database\Seeders;

use App\Models\Furniture\Entrywayfurniture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class EntrywayfurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([

            [
                'id' => 1,
                'title' => 'خزانة ملابس 9 أبواب , أبيض',
                'weight' => '260 *  42 / 221 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'لوح مضغوط, ورق فويل, خشب مضغوط, حشوة من ورق الكرتون المقوى (معاد التدوير بنسبة 100%)',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'مع سطح على الهياكل السفلية، يصبح حل التخزين مقعد طويل أيضاً. باب بمرآة يوفر المساحة لأنك لن تحتاجي إلى مرآة منفصلة. بأختيارك لأبواب بالمرآة، سيجعل هذا الغرفة تبدو أكبر، مضيئة وواسعة أكثر. طريقة رائعة لتحويل الردهات الضيقة والغرف الصغيرة. حل مثالي للمساحات المحدودة لأن الهيكل ليس عميقاً.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/1/1_1.jpg',
                    'furniture/entrywayfurniture/1/1_2.jpg',
                    'furniture/entrywayfurniture/1/1_3.jpg',
                    'furniture/entrywayfurniture/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'خزانة بـ 3 أدراج, أبيض/Sannidal',
                'weight' => '60 *  57 / 73 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => 'خشب',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'من السهل تعديل تشكيلات تخزين PLATSA لتتواكب مع احتياجاتك بإضافة (أو إزالة) الهياكل أو الأبواب أو التركيبات الداخلية أو الخارجية أو الأرجل أو مواسير التعليق.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/2/2_1.jpg',
                    'furniture/entrywayfurniture/2/2_2.jpg',
                    'furniture/entrywayfurniture/2/2_3.jpg',
                    'furniture/entrywayfurniture/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'صينية تسحب للخارج, أبيض',
                'weight' => '42 *  50 / 3.5 سم',
                'color' => 'أبيض',
                'capacity' => 1,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'احتفظي بإكسسواراتك إلى جانب ملابسك! هذه الصينية القابلة للسحب مثالية كما هي. أو يمكنك استخدامها مع تركيبات KOMPLEMENT الداخلية لحفظ مقتنياتك الصغيرة التي لا تحتاج إلى ارتفاع كبير داخل دولاب الملابس.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/3/3_1.jpg',
                    'furniture/entrywayfurniture/3/3_2.jpg',
                    'furniture/entrywayfurniture/3/3_3.jpg',
                    'furniture/entrywayfurniture/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'هيكل دولاب ملابس, أبيض',
                'weight' => '99  * 100 / 236 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'هيكل دولاب الملابس PAX سهل التجميع والفك والتركيب بدون أدوات. السر هو بنيته القابلة للطي والتي يمكنك فتحها مثل كتاب - في المكان المحدد حيث تريدين وضع دولاب ملابسك.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/4/4_1.jpg',
                    'furniture/entrywayfurniture/4/4_2.jpg',
                    'furniture/entrywayfurniture/4/4_3.jpg',
                    'furniture/entrywayfurniture/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'حامل ملابس, أبيض',
                'weight' => '99 *  46 / 152 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'فولاذ, طلاء بوليستر.',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'يمكن استخدامها في أي مكان بمنزلك، حتى في الأماكن الرطبة مثل الحمام وتحت الشرفات المظللة.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/5/5_1.jpg',
                    'furniture/entrywayfurniture/5/5_2.jpg',
                    'furniture/entrywayfurniture/5/5_3.jpg',
                    'furniture/entrywayfurniture/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'تشكيلة تخزين, أبيض',
                'weight' => '50 *  51 / 70 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'فولاذ, طلاء راتنج/بوليستر',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'هل تجدين صعوبة في الحفاظ على الأشياء مرتبة؟ يتيح لك حل التخزين JONAXEL الاستفادة من المساحة بطرق أكثر ذكاءً. ابحثي عن التشكيلة المناسبة واستخدميها في أي مكان تقريبًا، حتى في الحمامات الرطبة وغرف الغسيل.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/6/6_1.jpg',
                    'furniture/entrywayfurniture/6/6_2.jpg',
                    'furniture/entrywayfurniture/6/6_3.jpg',
                    'furniture/entrywayfurniture/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'خزانة أحذية بـ 4 حجيرات, أبيض',
                'weight' => '107 x 22 x101 سم',
                'color' => 'أبيض',
                'capacity' => 8,
                'material' => 'خشب مضغوط, حواف بلاستيكية, طلاء أكريليك, ورق فويل',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'مكان لتنظيم وتخزين جميع أحذيتك، مما يجعل الحركة في الحياة اليومية أكثر سهولة. التصميم الكلاسيكي البسيط بلمسة تقليدية يبدو رائعًا مع قطع الأثاث الأخرى .',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/7/7_1.jpg',
                    'furniture/entrywayfurniture/7/7_2.jpg',
                    'furniture/entrywayfurniture/7/7_3.jpg',
                    'furniture/entrywayfurniture/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'مقعد مع تخزين للأحذية, أبيض',
                'weight' => '85 *  32 / 65 سم',
                'color' => 'بيج غامق',
                'capacity' => 7,
                'material' => 'أبيض',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'التنظيف بقطعة قماش ناعمة مبللة بالماء ومسحوق غسيل لطيف أو صابون، عند الضرورة.',
                'model' => 'أثاث المدخل',
                'product_image' => [
                    'furniture/entrywayfurniture/8/8_1.jpg',
                    'furniture/entrywayfurniture/8/8_2.jpg',
                    'furniture/entrywayfurniture/8/8_3.jpg',
                    'furniture/entrywayfurniture/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): Entrywayfurniture {


            return Entrywayfurniture::firstOrCreate([
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
