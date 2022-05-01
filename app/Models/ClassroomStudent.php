<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomStudent extends Model
{
    protected $table = 'classroom_student';
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
