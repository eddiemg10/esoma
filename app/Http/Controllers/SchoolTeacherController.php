<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\SchoolTeacher;
use App\Models\School;


class SchoolTeacherController extends Controller
{
    
    
    public function store(Request $request){
            
        $schoolTeacher = new SchoolTeacher();

        $user = 1;
        $school = School::where('user_id', $user)->first();

        $schoolTeacher->user_id = $request->input('user');
        $schoolTeacher->school_id = $school->id;
     
        $schoolTeacher->save();
        
}
}
