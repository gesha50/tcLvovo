<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_name' => $this->faker->sentence(2, 3),
            'company' => $this->faker->sentence(1),
            'preview' => $this->faker->sentence(7),
            'description' => $this->faker->sentence(200),
            'icon_class' => 'fa-utensils',
        ];
    }
}
