<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadeddoc extends Model
{
    use HasFactory;
    protected $fillable=['name','description','doc'];
    protected $table='uploadeddocs';
}
