<?php

namespace Database\Factories;
use App\Models\Academy; 
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $academyName = $this->faker->randomElement(['Amman', 'Irbid', 'Zarqa', 'Aqaba', 'Salt']);

        return [
            'name' => $academyName,
            'location' => $academyName, 
         

        ];
    }
}
