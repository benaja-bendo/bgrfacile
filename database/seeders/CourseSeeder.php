<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = \App\Models\Course::factory()->count(100)->create();
        $users = \App\Models\User::all();
        $courses->each(function ($course) use ($users) {
            $course->users()->attach(
                $users->random(1)->pluck('id')->toArray()
            );
        });

    }
}
