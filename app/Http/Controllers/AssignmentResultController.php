<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignmentResult;


class AssignmentResultController extends Controller
{
    public function index(){

        $results = AssignmentResult::where('user_id', 1);
        return $results;
        

        $data = [
            "title" => "EClassroom | Results",
        ];
        return view('eclassroom/student/results/index', $data);
        
    }
}
