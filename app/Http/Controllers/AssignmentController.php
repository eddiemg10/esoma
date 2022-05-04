<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Classroom;
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
    public function show($id){

    }
}
