<?php

namespace Database\Factories;

use App\Models\Companies;
use App\Models\Gallery;
use App\Models\Services;
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
        return [
            'company_id' => Companies::factory(),
            'img' => 'http://lorempixel.com/400/200/',
        ];
    }
}
