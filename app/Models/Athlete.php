<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = [
        'academy_id',
        'belt_id',
        'dni',
        'firstname',
        'lastname',
        'address',
        'birth_date',
        'gender',
        'blood_type',
        'disability',
        'observations'
    ];

    public function academy()
    {
        return $this->belongsTo(Academy::class);
    }

    public function belt()
    {
        return $this->belongsTo(Belt::class);
    }
}
