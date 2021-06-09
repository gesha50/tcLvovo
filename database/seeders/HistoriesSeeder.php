<?php

namespace Database\Seeders;

use App\Models\Histories;
use Illuminate\Database\Seeder;

class HistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Histories::factory(6)->create();
    }
}
