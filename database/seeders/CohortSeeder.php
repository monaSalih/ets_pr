<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CohortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cohort::factory(5)->create();

    }
}
