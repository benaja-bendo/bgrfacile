<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'email',
        'phone',
        'website',
        'level_min',
        'level_max',
        'small_description',
        'long_description',
        'status',
        'logo',
        'cover',
    ];
// TODO: create un controller pour les schools dans l'api

}
