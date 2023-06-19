<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentPdf>
 */
class ContentPdfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'content' => '/storage/lessons/cv.pdf',
            'contentable_id' => $this->faker->numberBetween(1, 100),
            'contentable_type' => $this->faker->randomElement(['App\Models\Lesson']),
        ];
    }
}
