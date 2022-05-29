<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Classroom;
use App\Models\AssignmentQuestion;
use App\Models\AssignmentResult;
use Illuminate\Support\Facades\DB;




class AssignmentController extends Controller
{
    public function index($id){

        $classroom = Classroom::select('name')->where('id', $id)->get()[0]->name;

        $assignments = DB::table('assignments')
                  ->leftJoin('assignment_results', 'assignments.id', '=', 'assignment_results.assignment_id')
                  ->where('assignment_results.assignment_id', null)
                  ->select('assignments.*')
                  ->get();

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
        $assignment = Assignment::where('id', $asmt)->get()[0];
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

        $quiz = $request->all();
        $classroom = $request->input('classroom');

        $marks = 0;
        foreach($quiz as $value){
            if(is_array($value)){
                $marks = count($value);
            }
        }

        $assignment = new Assignment();

        $assignment->classroom_id = $classroom;


        $assignment->title = $request->input('assignment-title');
        $assignment->total_marks = $marks;
        
        $assignment->save();


        foreach($quiz as $value){
            if(is_array($value)){
                foreach($value as $key=>$val){

                    $assignmentQuestion = new AssignmentQuestion();
                    $assignmentQuestion->assignment_id = $assignment->id;
                    $assignmentQuestion->question = $val['question'];
                    $assignmentQuestion->answer = $val['answer'];
                    $assignmentQuestion->choices =  $val['choices'];

                    $assignmentQuestion->save();

                }
            }
            
        }   
        
        return redirect('/classroom/teacher/'.$classroom.'/assignments')->with('success', 'Assignment has been successfully created');
                
    }

    public function check(Request $request){

        
        $data = json_decode($request->input('data'));
        $assignment = $data[0]->assignment;        
        $student = $request->input('user');


        //Marking the submitted questions
        $score = 0;
        $failed_questions = [];

        foreach($data as $res){
            if(isset($res->question)){
                if ($res->choice===null) $res->choice="*&6^415./";
                if($this->markQuestion($res->question, $res->choice)){
                    $score++;
                }
                else{
                    array_push($failed_questions, $res->question);
                }
            }
        }

        $results = new AssignmentResult();
        $results->user_id = $student;
        $results->assignment_id = $assignment;
        $results->score = $score;
        $results->failed_questions = $failed_questions;

        $results->save();

        return json_encode($results->id);

    }


    public function markQuestion($question, $choice){

        $que = AssignmentQuestion::find($question);
        return $choice === $que->answer ? true : false;
    }

    public function delete(Request $request){


        $assignmentID = $request->input('data')['assignment'];
        $classroom = $request->input('data')['classroom'];

        $assignment = Assignment::find($assignmentID);
        $assignment->delete();

        $request->session()->flash('success', 'Assignment successfully deleted');
        return json_encode("/classroom/teacher/".$classroom."/assignments");
    }
}
