<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPdf extends Model
{
    use HasFactory;

    protected $fillable = [
        'contentable_id',
        'contentable_type',
        'content',
    ];

    public function contentable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
