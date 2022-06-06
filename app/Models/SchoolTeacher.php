<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolTeacher extends Model
{
    protected $table = 'school_teacher';
    protected $fillable = ['user_id','school_id'];
    use HasFactory;
}
