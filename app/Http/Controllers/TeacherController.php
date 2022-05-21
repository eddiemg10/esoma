<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use App\Models\SchoolTeacher;
use Illuminate\Support\Facades\DB;



class TeacherController extends Controller
{
    public function show(){
        return view ('eclassroom/teacher/classrooms/show');
    }

    public function verifyTeacher($tsc){

        $teacher = DB::table('users')
                     ->join('teachers', 'users.id', '=', 'teachers.user_id')
                     ->where('teachers.tsc', $tsc)
                     ->select('users.firstName', 'users.secondName' )
                     ->get();
    }
    
}
