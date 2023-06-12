<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

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
}
