<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\SchoolTeacher;
use App\Models\School;
use Illuminate\Validation\ValidationException;

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

public function delete(Request $request){

    $teacher  = $request->input('teacher');
    $schoolTeacher = SchoolTeacher::find($teacher);
    $schoolTeacher->delete();

    $request->session()->flash('success', 'Teacher successfully removed from your school');
    return true;
    
}

public function block(Request $request){

    $teacher  = $request->input('teacher');
    $schoolTeacher = SchoolTeacher::find($teacher);
    $schoolTeacher->blocked = !$schoolTeacher->blocked;
    $schoolTeacher->save();

    $request->session()->flash('success', $schoolTeacher->blocked ? 'Teacher has been blocked' : 'Teacher has been unblocked');
    return true;
    
}


public function addTeacher(Request $request){
    $teacher = Teacher::whereTscNumber($request->input('tsc'))->first();
    if (!$teacher) {
        throw ValidationException::withMessages(["tsc"=>"This Teacher does not exist"]);
    }
    SchoolTeacher::create(['user_id'=>$teacher->user_id,'school_id'=>1]);
    return back()->with('success','Teacher Added');
}


}