<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'sex',
        'address',
        'subject',
        'years_of_experience',
    ];

    protected $casts = [
        'years_of_experience' => 'integer',
    ];
}
