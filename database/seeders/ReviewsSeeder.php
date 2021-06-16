<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{

    protected $data = [
        [
            'name' => 'Сергей Шакарян',
            'worker' => 'Директор',
            'review' => 'Мы всегда рады видеть вас в нашем торговом комплексе!
                         Здесь есть все самые необходимые материалы для ремонта, также много
                          разных услуг, которые могут сильно облегчить Ваш труд! Ждём Вас!'
        ],
        [
            'name' => 'Гарик Мелкомян',
            'worker' => 'Сварщик',
            'review' => 'Мне очень комфортно работать на ТК Львово. Тут очень удобно.
                         Не трудно найти клиента, так как постоянно приезжают люди и
                         рядом хорошая и недорогаяя еда'
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
                'name' => $obj['name'],
                'worker' => $obj['worker'],
                'review' => $obj['review'],
            ];
            \DB::table('reviews')->insert($arr);
        }
    }

}
