<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piste extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'length',
        'path',
        'podcast_id',
    ];

    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}
