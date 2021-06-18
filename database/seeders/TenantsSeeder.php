<?php

namespace Database\Seeders;

use App\Models\Tenants;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{

    protected $data = [
        [
            'title' => 'Коммуникации',
            'description' => 'Регулируемая система отопления, вентиляция,
                                Электричество, Водоснабжение, Канализация,
                                Интернет,',
            'icon_class' => 'fa-satellite',
        ],
        [
            'title' => 'Безопасность',
            'description' => 'Система видеонаблюдения,
                                Охранная и пожарная сигнализация',
            'icon_class' => 'fa-hard-hat',
        ],
        [
            'title' => 'Посещаемость',
            'description' => 'На территории есть супермаркет, поэтому много людей постоянно заезжает',
            'icon_class' => 'fa-users',
        ],
        [
            'title' => 'Гибкость',
            'description' => 'Мы всегда может договориться о необычных предложениях. Ждём ваши идеи!',
            'icon_class' => 'fa-lightbulb',
        ],
        [
            'title' => 'Территория',
            'description' => 'Территория достаточно большая, удобно производить погрузку/разгрузку',
            'icon_class' => 'fa-truck',
        ],
        [
            'title' => 'Расположение',
            'description' => 'Прямо на Калужском шоссе, в часе езды от мкад',
            'icon_class' => 'fa-location-arrow',
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
                'icon_class' => $obj['icon_class'],
            ];
            \DB::table('tenants')->insert($arr);
        }
//        Tenants::factory(6)->create();
    }
}
