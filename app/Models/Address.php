<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'zip_code',
        'city',
        'country',
        'addressable_id',
        'addressable_type',
    ];

    protected $hidden = [
        'addressable_id',
        'addressable_type',
    ];

    protected $casts = [
        'addressable_id' => 'integer',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
