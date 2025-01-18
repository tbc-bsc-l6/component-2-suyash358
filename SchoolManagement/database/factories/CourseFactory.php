<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'Name' => $this->faker->sentence(3), // A random 3-word course name
            'Syllabus' => $this->faker->paragraph(2), // A short syllabus description
            'Duration' => $this->faker->randomElement(['3 months', '6 months', '1 year']), // Random duration
        ];
    }
}
