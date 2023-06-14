<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = json_decode('[
    {
        "name": "Collège Général",
        "slug": "college-general"
    },
    {
        "name": "Collège Technique",
        "slug": "college-technique"
    },
    {
        "name": "Lycée Général",
        "slug": "lycee-general"
    },
    {
        "name": "Lycée Technique",
        "slug": "lycee-technique"
    }
]
', true);

        if (app()->environment('production')) {
            foreach ($datas as $data) {
                \App\Models\Cycle::factory()->create([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'description' => $data['description'] ?? null,
                    'status' => $data['status'] ?? 'published',
                ]);
            }
        } else {
            foreach ($datas as $data) {
                \App\Models\Cycle::factory()->create($data);
            }
            $cycles = \App\Models\Cycle::all();
            $courses = \App\Models\Course::all();
            foreach ($courses as $course) {
                $course->cycles()->attach($cycles->random(rand(1, 2))->pluck('id')->toArray());
            }
        }
    }
}
