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
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->title(),
            'hours' => $this->faker->numberBetween(1,50),
            'value' => $this->faker->numberBetween(10000,200000),
            'description' => $this->faker->paragraph(),
        ];
    }
}
