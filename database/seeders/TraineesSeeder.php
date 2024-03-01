<?php

namespace Database\Seeders;

use App\Models\Trainee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TraineesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Trainee::factory()->count(10)->create();


    }
}
