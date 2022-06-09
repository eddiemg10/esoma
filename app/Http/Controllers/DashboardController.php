<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    

    public function index(){

        $user = 2;
        $classrooms = DB::table('classroom_student')
                        ->where('user_id', $user)
                        ->join('classrooms', 'classroom_student.id', '=', 'classrooms.id')
                        ->select('classrooms.*')
                        ->get();

        $schools = DB::table('classroom_student')
                      ->join('school_classroom', 'classroom_student.classroom_id', '=', 'school_classroom.classroom_id')
                      ->groupBy('school_id')
                      ->get();

        $data = [
            "classrooms" => $classrooms,
            "schools" => $schools
        ];
        return view('dashboard/dashboard', $data);
    }
}
