<?php

namespace Database\Seeders;

use App\Models\Demandeur;
use Illuminate\Database\Seeder;

class DemandeurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demandeur::factory()->count(1)->create();
    }
}
