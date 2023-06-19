<?php

namespace Database\Seeders;

use App\Models\ContentImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContentImage::factory()->count(100)->create();
    }
}
