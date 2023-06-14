<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Skill::factory()->count(10)->create();

        $skills = \App\Models\Skill::all();
        \App\Models\Course::all()->each(function ($course) use ($skills) {
            $course->skills()->attach(
                $skills->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
