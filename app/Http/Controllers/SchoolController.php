<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\School;


class SchoolController extends Controller
{
    public function AllClassrooms(){

        $user = 1;
        $school = School::where('user_id', $user)->first();

        $classrooms = DB::table('classrooms')
                        ->join('school_classroom', 'classrooms.id', '=', 'school_classroom.classroom_id')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('school_classroom.school_id', $school->id)
                        ->select('classrooms.*', 'teachers.displayName as teacher', 'teachers.tsc_number', 'classrooms.created_at as created_on')
                        ->get();

        $data = [
            "school" => $school,
            "classrooms" => $classrooms,
            
        ];

        return view("eclassroom/school/classes/index", $data);
    }

    public function showClassroom($id){

        $user = 1;
        $school = School::where('user_id', $user)->first();
        $classroom = DB::table('classrooms')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('classrooms.id', $id)
                        ->select('classrooms.*', 'teachers.user_id' ,'teachers.displayName as teacher', 'teachers.tsc_number', 'classrooms.created_at as created_on')
                        ->first();

        // return $classrooms;

        $data = [
            "school" => $school,
            "classroom" => $classroom,
            
        ];

        return view("eclassroom/school/classes/show", $data);

    }
}
