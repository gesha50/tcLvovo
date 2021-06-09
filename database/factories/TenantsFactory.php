<?php

namespace Database\Factories;

use App\Models\Tenants;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'icon_class' => 'fa-hard-hat',
            'description' => $this->faker->sentence(10),
        ];
    }
}
