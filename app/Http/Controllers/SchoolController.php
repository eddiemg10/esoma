<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\School;
use App\Models\Classroom;
use App\Models\SchoolClassroom;
use App\Models\Uploadeddoc;
use Illuminate\Support\Str;
use App\Models\Teacher;

use Illuminate\Support\Facades\Storage;
use App\Models\User;

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

        $teachers = DB::table('school_teacher')
                      ->join('users', 'school_teacher.user_id', '=', 'users.id')
                      ->select('users.id', 'users.firstName', 'secondName', 'users.email')
                      ->get();


        $data = [
            "school" => $school,
            "classrooms" => $classrooms,
            "teachers" => $teachers
            
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

        $students = DB::table('classroom_student')
                       ->join('users', 'classroom_student.user_id', '=', 'users.id')
                       ->where('classroom_student.classroom_id', $id)
                       ->select('users.firstName', 'users.secondName', 'users.email', 'classroom_student.created_at as joined_on')
                       ->get();

        $uploads=Uploadeddoc::all();

        $data = [
            "school" => $school,
            "classroom" => $classroom,
            "students" => $students,
            "uploads" => $uploads,
            
        ];

        return view("eclassroom/school/classes/show", $data);

    }

    public function store(Request $request){

        try{
            $classroom = new Classroom();
            $schoolClassroom = new SchoolClassroom();


            $classroom->access_code = Str::random(7);
    
            $classroom->name = $request->input('className');
            $classroom->description = $request->input('description');
            $classroom->teacher = $request->input('teacher');
            $classroom->subject = ($request->input('custom_subject') !== null) ? $request->input('custom_subject') :$request->input('subject');    
            $classroom->save();

            $schoolClassroom->classroom_id = $classroom->id;
            $schoolClassroom->school_id = $request->input('school');
            $schoolClassroom->save();




            return redirect('/classroom/school')->with('success', 'Class successfully added');

        }
        catch(Exception $e){
            return redirect('/classroom/school')->with('error', 'An error occured');
            
        }
                
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
