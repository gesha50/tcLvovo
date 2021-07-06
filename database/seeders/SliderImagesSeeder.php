<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SliderImagesSeeder extends Seeder
{
    protected $data = [
        ['pathToImage' => '/storage/slider_1.jpeg'],
        ['pathToImage' => '/storage/slider_2.jpeg'],
        ['pathToImage' => '/storage/slider_3.jpeg'],
        ['pathToImage' => '/storage/slider_4.jpeg'],
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
                'pathToImage' => $obj['pathToImage'],
            ];
            \DB::table('slider_images')->insert($arr);
        }
    }
}
