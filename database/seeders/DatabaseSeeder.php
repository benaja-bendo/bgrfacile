<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Constants\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RolesTableSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,
        ]);
    }
}
