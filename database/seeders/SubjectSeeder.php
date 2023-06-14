<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = json_decode('[
    {
        "name": "mathématiques",
        "slug": "mathematiques"
    },
    {
        "name": "physique",
        "slug": "physique"
    },
    {
        "name": "chimie",
        "slug": "chimie"
    },
    {
        "name": "biologie",
        "slug": "biologie"
    },
    {
        "name": "sciences de la Terre",
        "slug": "sciences-de-la-terre"
    },
    {
        "name": "Géographie",
        "slug": "geographie"
    },
    {
        "name": "histoire",
        "slug": "histoire"
    },
    {
        "name": "français",
        "slug": "francais"
    },
    {
        "name": "anglais",
        "slug": "anglais"
    },
    {
        "name": "espagnol",
        "slug": "espagnol"
    },
    {
        "name": "philosophie",
        "slug": "philosophie"
    },
    {
        "name": "physique-chimie",
        "slug": "physique-chimie"
    },
    {
        "name": "eps",
        "slug": "eps"
    },
    {
        "name": "dictee et questions",
        "slug": "dictee-et-questions"
    },
    {
        "name": "informatique",
        "slug": "informatique"
    }
]
', true);

        if (app()->environment('production')) {
            foreach ($datas as $data) {
                \App\Models\Subject::factory()->create([
                    'name' => $data['name'],
                    'slug' => $data['slug'],
                    'description' => $data['description'] ?? null,
                    'status' => $data['status'] ?? 'published',
                ]);
            }
        } else {
            foreach ($datas as $data) {
                \App\Models\Subject::factory()->create($data);
            }

            $subjects = \App\Models\Subject::all();
            $courses = \App\Models\Course::all();
            foreach ($courses as $course) {
                $course->subjects()->attach($subjects->random(rand(1, 3))->pluck('id')->toArray());
            }
        }
    }

}
