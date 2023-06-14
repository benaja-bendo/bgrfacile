<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = json_decode('[
    {
        "name": "3ème",
        "slug": "3eme"
    },
    {
        "name": "4ème",
        "slug": "4eme"
    },
    {
        "name": "5ème",
        "slug": "5eme"
    },
    {
        "name": "6ème",
        "slug": "6eme"
    },
    {
        "name": "seconde c",
        "slug": "seconde-c"
    },
    {
        "name": "seconde a",
        "slug": "seconde-a"
    },
    {
        "name": "seconde g2",
        "slug": "seconde-g2"
    },
    {
        "name": "première c",
        "slug": "premiere-c"
    },
    {
        "name": "première a",
        "slug": "premiere-a"
    },
    {
        "name": "première d",
        "slug": "premiere-d"
    },
    {
        "name": "terminale c",
        "slug": "terminale-c"
    },
    {
        "name": "terminale a",
        "slug": "terminale-a"
    },
    {
        "name": "terminale d",
        "slug": "terminale-d"
    },
    {
        "name": "terminale g2",
        "slug": "terminale-g2"
    }
]', true);

        if (app()->environment('production')) {
            foreach ($datas as $data) {
                \App\Models\Level::factory()->create([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'description' => $data['description'] ?? null,
                    'status' => $data['status'] ?? 'published',
                ]);
            }
        } else {
            foreach ($datas as $data) {
                \App\Models\Level::factory()->create($data);
            }

            $levels = \App\Models\Level::all();
            $courses = \App\Models\Course::all();

            foreach ($courses as $course) {
                $course->levels()->attach($levels->random(rand(1, 3))->pluck('id')->toArray());
            }

            Cycle::all()->each(function ($cycle) {
                $cycle->levels()->attach(\App\Models\Level::all()->random(rand(1, 3))->pluck('id')->toArray());
            });
        }
    }
}
