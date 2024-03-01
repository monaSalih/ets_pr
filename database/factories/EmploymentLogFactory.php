<?php

// EmploymentLogFactory.php

namespace Database\Factories;

use App\Models\Academy;
use App\Models\Cohort;
use App\Models\Trainee;
use App\Models\EmploymentLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentLogFactory extends Factory
{
    public function definition()
    {
        // Create a trainee with a cohort
        // $trainee = Trainee::factory()->create();
        // $cohort_id = $trainee->cohort->cohort_id;

        // $cohortId = Cohort::all()->random()->id;

        return [ 
            'status' => $this->faker->randomElement(['Job offer','Internship', 'Available' ,'Freelance' ,'Internship for Employment']),
            'company' => $this->faker->company,
            'position' => $this->faker->jobTitle,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'academy_id' => \App\Models\Academy::all()->random()->id,
            'cohort_id' => \App\Models\Cohort::all()->random()->id,
            'created_at' => $this->faker->date(),
            'created_by' => $this->faker->name(),
            'updated_at' => $this->faker->date(),
            'trainee_id' => \App\Models\Trainee::all()->random()->id, 
        ];
    }
}
