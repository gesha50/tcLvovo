<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageInfoSeeder extends Seeder
{
    public $data = [
        [
            'page' => 'aboutUs',
            'title' => 'Добро пожаловать в ТК Львово',
            'description' => 'В нашем торговом комплексе
                             вы найдете много интересного! В нашем торговом
                             комплексе вы найдете много интересного! В нашем
                             торговом комплексе вы найдете много интересного!
                             В нашем торговом комплексе вы найдете много интересного!
                             В нашем торговом комплексе вы найдете много интересного!'
        ],
        [
            'page' => 'history',
            'title' => 'История ТК Львово',
            'description' => 'Claritas est etiam processus dynamicus,
                             qui sequitur mutationem consuetudium lectorum. Investigationes
                              demonstraverunt lectores legere me lius quod ii legunt saepius autem
                               vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.'
        ],
        [
            'page' => 'territory',
            'title' => 'О территории',
            'description' => 'Claritas est etiam processus dynamicus,
                             qui sequitur mutationem consuetudium lectorum. Investigationes
                              demonstraverunt lectores legere me lius quod ii legunt saepius autem
                               vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.'
        ],
        [
            'page' => 'tenant',
            'title' => 'ТК Львово для арендаторов',
            'description' => 'Claritas est etiam processus dynamicus,
                             qui sequitur mutationem consuetudium lectorum. Investigationes
                              demonstraverunt lectores legere me lius quod ii legunt saepius autem
                               vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.'
        ],
        [
            'page' => 'brands',
            'title' => 'Все известные бренды у нас',
            'description' => 'Claritas est etiam processus dynamicus,
                             qui sequitur mutationem consuetudium lectorum. Investigationes
                              demonstraverunt lectores legere me lius quod ii legunt saepius autem
                               vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.'
        ],
        [
            'page' => 'services',
            'title' => 'Что мы можем предложить Вам?',
            'description' => 'Claritas est etiam processus dynamicus,
                             qui sequitur mutationem consuetudium lectorum. Investigationes
                              demonstraverunt lectores legere me lius quod ii legunt saepius autem
                               vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.'
        ],
        [
            'page' => 'contact',
            'title' => 'Мы работаем для вас!',
            'description' => 'на сайте ничего не выводится'
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
                'page' => $obj['page'],
                'title' => $obj['title'],
                'description' => $obj['description'],
            ];
            \DB::table('page_infos')->insert($arr);
        }
    }
}
