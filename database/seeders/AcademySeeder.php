<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AcademySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Academy::factory(5)->create();

    }
}
