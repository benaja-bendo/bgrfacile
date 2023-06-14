<?php

namespace Database\Seeders;

use App\Models\ContentText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContentText::factory()->count(10)->create();
    }
}
