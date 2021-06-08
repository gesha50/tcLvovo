<?php

namespace Database\Factories;

use App\Models\Brands;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brands::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, 3),
            'link' => 'https://www.duplexitaly.com/ru',
            'description' => $this->faker->sentence(20),
            'image' => '/images/angar.png',
        ];
    }
}
