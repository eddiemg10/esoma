<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentResult extends Model
{
    use HasFactory;

    protected $casts = [
        'failed_questions' => 'array',
    ];
}
