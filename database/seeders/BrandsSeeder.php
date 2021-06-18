<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{

    protected $data = [
        [
            'title' => 'UNIS',
            'description' => 'Группа компаний UNIS работает на российском рынке с 1994 года. Уже более 20 лет UNIS занимает лидирующие позиции по производству и продаже сухих строительных смесей в России и странах СНГ. Ежедневно со складов ГК UNIS отгружается более 3 000 тонн готовой продукции в более чем 140 городов России и в страны СНГ.',
            'link' => 'https://unistrom.ru/',
            'image' => '/storage/brands/unis.jpeg',
        ],
        [
            'title' => '«Пятёрочка»',
            'description' => 'Мы заботимся о том, чтобы каждый гость мог порадовать себя и своих близких вкусными блюдами и перекусами и уделяем большое внимание свежести и качеству наших продуктов. В магазинах в новой концепции мы непосредственно в торговом зале готовим ароматную хрустящую выпечку, увеличили ассортимент продукции категории «фреш», выделили специальную зону для отдыха и подзарядки мобильных устройств.',
            'link' => 'https://5ka.ru/',
            'image' => '/storage/brands/5ка.png',
        ],
        [
            'title' => 'Момент',
            'description' => 'Пожалуй самый известный на Российском рынке бытовой клей. Склеивание различных видов пластмасс, резины, металлов, дерева, фарфора, керамики, кожи, пробки, тканей, картона и бумаги. ',
            'link' => 'https://www.moment.ru/ru.html',
            'image' => '/storage/brands/moment.jpeg',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $obj) {
            $arr = [
                'title' => $obj['title'],
                'description' => $obj['description'],
                'link' => $obj['link'],
                'image' => $obj['image'],
            ];
            \DB::table('brands')->insert($arr);
        }
//        Brands::factory(10)->create();
    }
}
