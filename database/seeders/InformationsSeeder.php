<?php

namespace Database\Seeders;

use App\Models\Informations;
use Illuminate\Database\Seeder;

class InformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informations::factory(1)->create();
    }
}
