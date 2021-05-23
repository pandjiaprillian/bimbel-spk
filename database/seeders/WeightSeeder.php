<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Weight::factory()->create();
    }
}
