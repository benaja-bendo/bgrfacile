<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'slug',
        'description',
        'status',
        'is_premium',
    ];

    protected $casts = [
        'is_premium' => 'boolean',
    ];

    public const TYPE_CONTENT = [
        'texte' => 'texte',
        'audio' => 'audio',
        'image' => 'image',
        'pdf' => 'pdf',
        'video' => 'video',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function contentTexts(): MorphMany
    {
        return $this->morphMany(ContentText::class, 'contentable');
    }
}
