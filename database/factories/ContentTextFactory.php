<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentText>
 */
class ContentTextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $content = json_decode('{
    "time" : 1550476186479,
    "blocks" : [
        {
            "type" : "paragraph",
            "data" : {
                "text" : "The example of text that was written in <b>one of popular</b> text editors."
            }
        },
        {
            "type" : "header",
            "data" : {
                "text" : "With the header of course",
                "level" : 2
            }
        },
        {
            "type" : "paragraph",
            "data" : {
                "text" : "So what do we have?"
            }
        }
    ],
    "version" : "2.8.1"
}', true);
        return [
            'content' => $content,
            'contentable_id' => $this->faker->numberBetween(1, 100),
            'contentable_type' => $this->faker->randomElement(['App\Models\Lesson']),
        ];
    }
}
