<?php

namespace Database\Factories;
use App\Models\Cohort;
use Illuminate\Database\Eloquent\Factories\Factory;

class CohortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        
        return [
            'number' => $this->faker->numberBetween(1, 100), // Adjust as needed
            'training_type' => $this->faker->word,
            'donor_type' => $this->faker->word,
            'description' => $this->faker->text,
            'academy_id' => \App\Models\Academy::all()->random()->id,
            'fund_id' => \App\Models\Fund::all()->random()->id,
            'name' => $this->faker->word,
            'training_location' => $this->faker->word,
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'technology' => $this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
