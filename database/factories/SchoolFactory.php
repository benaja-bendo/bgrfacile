<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $levels = ['primaire', 'secondaire', 'universitaire', 'autre'];
        $level_min = 'maternelle';
        $level_max = $this->faker->randomElement($levels);
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'level_min' => $level_min,
            'level_max' => $level_max,
            'small_description' => $this->faker->text(100),
            'long_description' => $this->faker->text(1000),
            'status' => 'published',
            'logo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'cover' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
