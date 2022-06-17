<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\ClassroomStudent;
use App\Models\Classroom;
use App\Models\Uploadeddoc;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function index(){
        $id = Auth::User()->id;
        $classrooms = DB::table('classrooms')
                        ->join('classroom_student', 'classrooms.id', '=', 'classroom_student.classroom_id')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('classroom_student.user_id', $id)
                        ->select('classrooms.*', 'users.firstName', 'users.secondName', 'teachers.tsc_number', 'classroom_student.created_at as joined_on')
                        ->get();

        
        $data = [
            "title" => "EClassroom | Student",
            "classrooms" => $classrooms
        ];


        return view('eclassroom/student/classrooms/index', $data);
    }

    public function show($id){


        $uploads = Uploadeddoc::where('classroom_id', $id)->count();
        
        $classroom = DB::table('classrooms')
                        ->join('classroom_student', 'classrooms.id', '=', 'classroom_student.classroom_id')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('classrooms.id', $id)
                        ->select('classrooms.*', 'users.firstName', 'users.secondName', 'teachers.tsc_number', 'classroom_student.created_at as joined_on')
                        ->get();

        $total_assignments = DB::table('assignments')
                          ->where('assignments.classroom_id', $id)
                          ->count();
        $marked_assignments = DB::table('assignment_results')
                                ->join('assignments', 'assignment_results.assignment_id', '=', 'assignments.id')
                                ->where('assignments.classroom_id', $id)
                                ->where('user_id', 1)
                                ->count();
        

        $data = [
            "title" => "EClassroom | ".$classroom[0]->name,
            "page" => $classroom[0]->name,
            "classroom" => $classroom[0],
            "uploads" => $uploads,
            "assignments" => $total_assignments - $marked_assignments,
            "results" => $marked_assignments
        ];
        return view('eclassroom/student/classrooms/show', $data);

    }

    public function update(Request $request){

        $id = $request->get('classroom');
        $classroom = Classroom::find($id);
        $classroom->status = !$classroom->status;
        $classroom->save();

    }

    public function enroll(Request $request){

        $user = $request->user;
        $classroom = $request->classroom;

        $searchClass = Classroom::where('access_code', '=', $classroom)->first();

        if($searchClass){

            $classStudent = new ClassroomStudent();
            $classStudent->user_id = $user;
            $classStudent->classroom_id = $searchClass->id;
            $classStudent->save();


            return redirect()->back()->with('success', 'Successfully enrolled');

        }
        else{
            return redirect()->back()->with('error', 'Class not found');

        }
        return $user;


    }

}
