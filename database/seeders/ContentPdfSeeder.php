<?php

namespace Database\Seeders;

use App\Models\ContentPdf;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentPdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContentPdf::factory()->count(100)->create();
    }
}
