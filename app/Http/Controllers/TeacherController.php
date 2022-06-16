<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Assignment;
use App\Models\AssignmentQuestion;
use App\Models\SchoolTeacher;
use App\Models\SchoolClassroom;
use App\Models\School;
use App\Models\Classroom;
use App\Models\Uploadeddoc;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class TeacherController extends Controller
{

    public function index($id){

        $user = Auth::User()->id;

        $school = School::find($id);
        $classes = DB::table('school_classroom')
                      ->join('classrooms', 'school_classroom.classroom_id', '=', 'classrooms.id')
                      ->join('users', 'classrooms.teacher', '=', 'users.id')
                      ->where('classrooms.teacher', $user)
                      ->where('school_classroom.school_id', $school->id)
                      ->select('classrooms.*', 'users.firstName', 'users.secondName' , 'classrooms.created_at as created_on')
                      ->get();

        $blocked = DB::table('school_teacher')
                      ->where('user_id', $user)
                      ->where('school_id', $school->id)
                      ->select('blocked')
                      ->first();
    
        $data = [
            'school' => $school,
            'classrooms' => $classes,
            'blocked' => $blocked->blocked,
            
        ];
        return view('eclassroom/teacher/classrooms/index', $data);
    }

    public function show($id){

        $uploads = Uploadeddoc::where('classroom_id', $id)->count();
        $classroom = DB::table('classrooms')
                        ->leftJoin('classroom_student', 'classrooms.id', '=', 'classroom_student.classroom_id')
                        ->join('users', 'classrooms.teacher', '=', 'users.id')
                        ->join('teachers', 'users.id', '=', 'teachers.user_id')
                        ->where('classrooms.id', $id)
                        ->select('classrooms.*', 'users.firstName', 'users.secondName', 'teachers.tsc_number', 'classrooms.created_at as joined_on')
                        ->get();


        $total_assignments = DB::table('assignments')
                          ->where('assignments.classroom_id', $id)
                          ->count();
        $students = DB::table('classroom_student')
                        ->where('classroom_id', $id)
                        ->count();

        $schoolID = SchoolClassroom::where('classroom_id', $id)->first();
        $school = School::find($schoolID);
      
        

        $data = [
            "school" => $school[0],
            "page" => $classroom[0]->name,
            "classroom" => $classroom[0],
            "uploads" => $uploads,
            "assignments" => $total_assignments,
            "students" => $students
        ];

        return view ('eclassroom/teacher/classrooms/show', $data);
    }

    public function showSchools(){

        $user = Auth::User()->id;

        $schools = DB::table('school_teacher')
                      ->join('schools', 'school_teacher.school_id', '=', 'schools.id')
                      ->where('school_teacher.user_id', $user)
                      ->select('schools.*')
                      ->get();

        $data = [
            "schools" => $schools,
        ];


        return view ('eclassroom/teacher/schools/index', $data);
    }

    public function verifyTeacher($tsc){

        $teacher = DB::table('users')
                     ->join('teachers', 'users.id', '=', 'teachers.user_id')
                     ->where('teachers.tsc', $tsc)
                     ->select('users.firstName', 'users.secondName' )
                     ->get();
    }
    
    public function showAllAssignments($id){

        $assignments = Assignment::where('classroom_id', $id)->orderBy('id', 'DESC')->get();

        $schoolID = SchoolClassroom::where('classroom_id', $id)->first();
        $school = School::find($schoolID);


        $data = [
            "school" => $school[0],
            "classroom" => Classroom::find($id),
            'assignments' => $assignments,
            'classID' => $id
        ];


        return view('eclassroom/teacher/assignments/index', $data);
    }

    public function showAssignment($classID, $assignmentID){

        $assignment = Assignment::find($assignmentID);
        $quiz = AssignmentQuestion::where('assignment_id', $assignmentID)->get()->toArray();

        foreach($quiz as &$que){
            array_push($que['choices'], $que['answer']);
            shuffle($que['choices']);
        }

        $schoolID = SchoolClassroom::where('classroom_id', $classID)->first();
        $school = School::find($schoolID);

        $data = [
            "school" => $school[0],
            "classroom" => Classroom::find($classID),
            'assignment' => $assignment,
            'quiz' => $quiz,
        ];

        return view('eclassroom/teacher/assignments/show', $data);
    }

    public function store($classID){

        $schoolID = SchoolClassroom::where('classroom_id', $classID)->first();
        $school = School::find($schoolID);

        $data = [
            "school" => $school[0],
            'classroom' => Classroom::find($classID),
        ];

        return view('eclassroom/teacher/assignments/store', $data);
    }

    public function register(Request $request){
        
        $validated = $request->validate([
            'tsc_number' => 'required|unique:teachers|min:6',
        ]);

        try{
            $teacher = new Teacher();
            $user = User::find(Auth::user()->id);
            $user->user_type = "teacher";
            $user->save();
    
            $teacher->user_id = Auth::user()->id;
            $teacher->tsc_number = $request->tsc_number;
            $teacher->save();
        }
        catch(Exception $e){
            dd($e);
        }

        return redirect('/classroom');
        


    }
}
