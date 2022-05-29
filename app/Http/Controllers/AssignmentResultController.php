<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\AssignmentResult;
use App\Models\AssignmentQuestion;
use App\Models\Classroom;


use Illuminate\Support\Facades\DB;



class AssignmentResultController extends Controller
{
    public function index($class_id){

        $classroom_name = Classroom::find($class_id)->name;

        $results = DB::table('assignment_results')
                       ->join('assignments', 'assignment_results.assignment_id', '=', 'assignments.id')
                       ->where('assignments.classroom_id', $class_id)
                       ->where('user_id', 1)
                       ->select('assignment_results.*', 'assignments.title', 'assignments.total_marks')
                       ->get();
        
        $data = [
            "title" => "EClassroom | Results",
            "results" => $results,
            "classroom" => $class_id,
            "page" =>$classroom_name,
            "pageID" => $class_id
        ];
        return view('eclassroom/student/results/index', $data);
        
    }

    public function show($class_id, $assignment_result){

        $classroom = Classroom::find($class_id)->name;
        $results =  AssignmentResult::find($assignment_result);
        $quiz = AssignmentQuestion::where('assignment_id', $results->assignment_id)->get()->toArray();

        $assignment =  Assignment::find($results->assignment_id);

        foreach($quiz as &$que){
            array_push($que['choices'], $que['answer']);
            shuffle($que['choices']);
        }

        $data = [
            "title" => "Results",
            "page" => $classroom,
            "pageID" => $class_id,
            "quiz" => $quiz,
            "assignment" => $assignment,
            "results" => $results
        ];
        return view('eclassroom/student/results/show', $data);
    }
}
