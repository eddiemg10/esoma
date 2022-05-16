<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;

use Illuminate\Support\Facades\Storage;
use App\Models\User;

class SchoolController extends Controller
{
    public function classrooms(){

        $user = 1;
        
        return view("eclassroom/school/classes/index");
    }

    public function student_management(){
        $data=[
            'students' => User::whereUserType('student')->get(),
        ];
        return view ("eclassroom/school/student_management",$data);
    }
    public function teacher_management(){
        $data=[
            'users' => User::whereUserType('teacher')->with('teacher')->get(),
        ];
        // dd($data['teachers']);
        return view ("eclassroom/school/teacher_management",$data);
    }
    
    //User::create($data)->teacher()->create($data);
}
