<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'status',
        'is_premium',
    ];

    public const TYPE_CONTENT = [
        'texte' => 'texte',
        'audio' => 'audio',
        'image' => 'image',
        'pdf' => 'pdf',
        'video' => 'video',
    ];

    protected $casts = [
        'is_premium' => 'boolean',
    ];

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_user')->withTimestamps();
    }

    public function cycles(): BelongsToMany
    {
        return $this->belongsToMany(Cycle::class, 'course_cycle')->withTimestamps();
    }

    public function levels(): BelongsToMany
    {
        return $this->belongsToMany(Level::class, 'course_level')->withTimestamps();
    }
}
