<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'subject_code',
        'name',
        'description',
        'instructor',
        'schedule',
        'grades',
        'average_grade',
        'remarks',
        'date_taken',
    ];

    protected $casts = [
        'grades' => 'array',
    ];
}
