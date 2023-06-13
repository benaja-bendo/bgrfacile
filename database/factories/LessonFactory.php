<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'course_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph(3),
            'status' => $this->faker->randomElement(['draft','published', 'unpublished']),
            'is_premium' => $this->faker->boolean(20),
        ];
    }
}
