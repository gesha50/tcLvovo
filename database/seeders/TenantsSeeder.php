<?php

namespace Database\Seeders;

use App\Models\Tenants;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenants::factory(6)->create();
    }
}
