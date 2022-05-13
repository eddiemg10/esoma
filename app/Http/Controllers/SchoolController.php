<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SchoolController extends Controller
{
    public function classrooms(){

        $user = 1;
        
        return view("eclassroom/school/classes/index");
    }
}
