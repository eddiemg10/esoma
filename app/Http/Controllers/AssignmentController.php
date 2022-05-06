<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Classroom;
use App\Models\AssignmentQuestion;
use Illuminate\Support\Facades\DB;




class AssignmentController extends Controller
{
    public function index($id){

        $classroom = Classroom::select('name')->where('id', $id)->get()[0]->name;
        $assignments = Assignment::where('classroom_id', $id)->get();

        $data = [
            "title" => "EClassroom | ".$classroom,
            "page" => $classroom,
            "pageID" => $id,
            "assignments" => $assignments
        ];
        return view('eclassroom/student/assignments/index', $data);
    }

    public function show($id, $asmt){

        $classroom = Classroom::select('name')->where('id', $id)->get()[0]->name;
        $assignment = Assignment::where('id', $asmt)->get()[0]->id;
        $quiz = AssignmentQuestion::where('assignment_id', $asmt)->get()->toArray();

        foreach($quiz as &$que){
            array_push($que['choices'], $que['answer']);
            shuffle($que['choices']);
        }
        

        $data = [
            "title" => "EClassroom | ".$classroom,
            "page" => $classroom,
            "pageID" => $id,
            "assignment" => $assignment,
            "quiz" => $quiz
        ];
        return view('eclassroom/student/assignments/show', $data);
    }

    public function store(Request $request){

        $assignment = new Assignment();
        $assignmentQuestion = new AssignmentQuestion();


        $assignment->classroom_id = 1;
        $assignment->due_date = now();
        $assignment->total_marks = $request->input('marks');
        
        $assignment->save();
    
        
        $assignmentQuestion->assignment_id = $assignment->id;
        $assignmentQuestion->question = $request->input('question');
        $assignmentQuestion->answer = $request->input('answer');
        $assignmentQuestion->choices = $request->input('choices');

        $assignmentQuestion->save();

        
    }
}
