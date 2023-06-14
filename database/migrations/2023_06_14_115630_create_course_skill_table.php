<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Course::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Skill::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_skill');
    }
};
