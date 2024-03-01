<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use App\Models\Trainee;
use App\Models\Cohort;
use App\Models\Academy;

use Illuminate\Database\Eloquent\Factories\Factory;

class TraineeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Trainee::class;

    public function definition()
    {
        $cohort = Cohort::factory()->create(); // Create a cohort for the trainee

        return  [
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'graduated' => $this->faker->randomElement(['no', 'yes']),
            'certificat_type' => $this->faker->randomElement(['Attendance', 'Partial_Front_End', 'Partial_Back_End', 'Full-Stack','None']),
            'nationality' => $this->faker->country,
            'country' => $this->faker->country,
            'passport_number' => $this->faker->optional()->numerify('#############'),
            'national_id' => $this->faker->optional()->randomNumber(9),
            'birthdate' => $this->faker->date(),
            'first_name' => $this->faker->firstName,
            'second_name' => $this->faker->firstName,
            'third_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'ar_first_name' => $this->faker->optional()->firstName,
            'ar_second_name' => $this->faker->optional()->firstName,
            'ar_third_name' => $this->faker->optional()->firstName,
            'ar_last_name' => $this->faker->optional()->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'martial_status' => $this->faker->randomElement(['single', 'married']),
            'education' => $this->faker->sentence,
            'educational_status' => $this->faker->randomElement(['student', 'graduate']),
            'field' => $this->faker->word,
            'educational_background' => $this->faker->sentence,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'academy_id' => $this->faker->numberBetween(1, 5),
            'cohort_id' => \App\Models\Cohort::all()->random()->id,
            'id_img' => $this->faker->imageUrl(),
            'personal_img' => $this->faker->imageUrl(),
            'vaccination_img' => $this->faker->imageUrl(),
            'git_hub' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];

    }

    public function configure()
    {
        return $this->afterCreating(function (Trainee $trainee) {
            $cohort = Cohort::factory()->create();
            $trainee->cohort()->associate($cohort)->save();
        });
    }

    
   
}
