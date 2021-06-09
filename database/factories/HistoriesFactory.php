<?php

namespace Database\Factories;

use App\Models\Histories;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Histories::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2, 3),
            'year' => $this->faker->year,
            'description' => $this->faker->sentence(20),
        ];
    }
}
