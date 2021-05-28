<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word;
        return [
            'nameForId' => $name,
            'nameRU' => $name,
            'img' => 'https://imgholder.ru/600x300/8493a8/adb9ca&text=IMAGE+HOLDER&font=kelson'
        ];
    }
}
