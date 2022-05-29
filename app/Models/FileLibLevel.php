<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileLibLevel extends Model
{
    use HasFactory;
    protected $table = 'file_uploads';
    protected $fillable=['subject_id','name','description','doc'];

}
