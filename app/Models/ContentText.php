<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentText extends Model
{
    use HasFactory;

    protected $fillable = [
        'contentable_id',
        'contentable_type',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function contentable()
    {
        return $this->morphTo();
    }
}
