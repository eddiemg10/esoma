<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ClassroomStudent;

class ClassroomController extends Controller
{
    public function index(){
        $id = 2;
        $classrooms = DB::table('classrooms')
                        ->join('classroom_student', 'classrooms.id', '=', 'classroom_student.classroom_id')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('classroom_student.user_id', 2)
                        ->select('classrooms.*', 'teachers.name as teacher', 'teachers.tsc_number', 'classroom_student.created_at as joined_on')
                        ->get();
        // foreach($classrooms as $c){
            
        //     echo Carbon::parse($c->created_at). "  ";
        //     echo $c->joined_on. "<br>";
        // }
        // die();
        
        $data = [
            "title" => "EClassroom | Student",
            "name" => request('name'),
            "user" => $id,
            "classrooms" => $classrooms
        ];
        return view('eclassroom/student_classes', $data);
    }

    public function show($id){

        return "<h1>CLassroom {{$id}}</h1>";

    }
}
