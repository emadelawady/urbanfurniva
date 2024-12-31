<?php

namespace Database\Seeders;

use App\Models\LivingRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class LivingRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Collection::make([
            [
                'id' => 1,
                'title' => 'كنبة-سرير, Knisa',
                'weight' => '200 *  128 / 78 سم',
                'color' => 'رمادى غامق',
                'capacity' => 4,
                'material' => 'فولاذ, طلاء راتنج/بوليستر',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'تتحول هذه الكنبة بسرعة وسهولة إلى سرير واسع لشخصين - نسيج كثيف يجعلها مريحة في الجلوس والنوم، كما أنها خفيفة الوزن - الأمر الذي يجعلها مثالية عند تنظيف أو إعادة ترتيب الأثاث.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/1/1_1.jpg',
                    'furniture/livingroom/1/1_2.jpg',
                    'furniture/livingroom/1/1_3.jpg',
                    'furniture/livingroom/1/1_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'طاولة سرير جانبية, صناعة يدوية',
                'weight' => '70 *  52 سم',
                'color' => 'خشبى',
                'capacity' => 4,
                'material' => 'الخيزران, ورنيش أكريلك شفاف',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'مجموعة TOLKNING المتعددة الاستخدامات مصنوعة من ألياف طبيعية ذات مظهر رائع. يمكنك استخدام هذه الطاولة المرتفعة بجوار السرير أو الكرسي بذراعين - وتقديم القهوة على الصينية القابلة للنزع.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/2/2_1.jpg',
                    'furniture/livingroom/2/2_2.jpg',
                    'furniture/livingroom/2/2_3.jpg',
                    'furniture/livingroom/2/2_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'كنبة-سرير, Knisa رمادي فاتح',
                'weight' => '202 *  119 / 61 سم',
                'color' => 'رمادى فاتح',
                'capacity' => 4,
                'material' => 'خشب وبوليستر',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'تم تصميم الكنبة سرير FRIDHULT لتستخدم أقل مساحة ممكنة على الأرض، مع زيادة مساحة النوم إلى الحد الأقصى. مثالية إذا أردت العيش في مساحة صغيرة وتريدين أن تتمكني بسهولة من تحويل الكنبة إلى سرير.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/3/3_1.jpg',
                    'furniture/livingroom/3/3_2.jpg',
                    'furniture/livingroom/3/3_3.jpg',
                    'furniture/livingroom/3/3_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'هيكل سرير نهاري مع 3 أدراج, أبيض',
                'weight' => '20 * 209 / 83 سم',
                'color' => 'أبيض',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'سنة ضد عيوب الصناعة',
                'content' => 'كنبة، سرير مفرد، سرير مزدوج وتخزين في قطعة واحدة من الأثاث! مثالي للمساحات الضيقة. وإذا أعجبك التصميم يمكنك استخدامه مع قطع أثاث أخرى في مجموعة HEMNES.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/4/4_1.jpg',
                    'furniture/livingroom/4/4_2.jpg',
                    'furniture/livingroom/4/4_3.jpg',
                    'furniture/livingroom/4/4_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'كرسي بجناحين, Tibbleby بيج/رمادي',
                'weight' => '86 * 99 / 54 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 1,
                'material' => 'فولاز وبوليستر',
                'upholstery_material' => 'polyester , قطن',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'من منا لا يحلم بامتلاك زاوية خاصة به للاسترخاء؟ يتميز الكرسي بجناحين OSKARSHAMN بإحتوائه المريح للجسد بينما يجعله التصميم الرائع ملفتاً للأنظار في أي غرفة.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/5/5_1.jpg',
                    'furniture/livingroom/5/5_2.jpg',
                    'furniture/livingroom/5/5_3.jpg',
                    'furniture/livingroom/5/5_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'خزانة ببابين و رف واحد, بني/شكل خشب الجوز',
                'weight' => '70 * 35 / 70 سم',
                'color' => 'بنى',
                'capacity' => 4,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'هل تحتاجين إلى خزانة واحدة أو عدة خزانات؟ تخزين مغلق أم مفتوح؟ انت صاحبة القرار. خزانة EKET تسهّل الأمر عند تغيير رأيك، وتقوم الأرفف القابلة للتعديل بتكييف مساحة التخزين وفقًا لاحتياجاتك.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/6/6_1.jpg',
                    'furniture/livingroom/6/6_2.jpg',
                    'furniture/livingroom/6/6_3.jpg',
                    'furniture/livingroom/6/6_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'خزانة بباب زجاجي مع 3 أدراج',
                'weight' => '90 * 37 / 197 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'جمال مستديم من موارد مستدامة للصنوبر الصلب، مواد طبيعية متجددة تصبح أكثر جمالاً مع مرور الزمن. هل أعجبتك؟ اذن استخدميها مع منتجات أخرى من مجموعة HEMNES.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/7/7_1.jpg',
                    'furniture/livingroom/7/7_2.jpg',
                    'furniture/livingroom/7/7_3.jpg',
                    'furniture/livingroom/7/7_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'طاولة تلفزيون, صباغ أبيض/بني فاتح',
                'weight' => '148 * 57 / 47 سم',
                'color' => 'متعدد الألوان',
                'capacity' => 3,
                'material' => 'خشب',
                'upholstery_material' => '-',
                'warranty' => 'ضمان لمدة عام ضد عيوب التصنيع',
                'content' => 'جمال مستديم من موارد مستدامة للصنوبر الصلب، مواد طبيعية متجددة تصبح أكثر جمالاً مع مرور الزمن. هل أعجبتك؟ اذن استخدميها مع منتجات أخرى من مجموعة HEMNES.',
                'model' => 'غرفة معيشة',
                'product_image' => [
                    'furniture/livingroom/8/8_1.jpg',
                    'furniture/livingroom/8/8_2.jpg',
                    'furniture/livingroom/8/8_3.jpg',
                    'furniture/livingroom/8/8_4.jpg',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ])
        ->each(function ($record): LivingRoom {


            return LivingRoom::firstOrCreate([
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
