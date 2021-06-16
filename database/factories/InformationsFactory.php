<?php

namespace Database\Factories;

use App\Models\Informations;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => 'ООО "БОССИКО"',
            'name' => 'ТК ЛЬВОВО',
            'description' => 'Наша компания предоставляет торговые площадки в аренду.
                              У нас есть свободные торговые зоны, а также зоны хранения.
                               Очень удобное распложение на калужском шоссе. Будем рады видеть Вас!',
            'works_room' => 15,
        ];
    }
}
