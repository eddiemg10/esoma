<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class DashboardController extends Controller
{
    

    public function index(){

        $user = Auth::User()->id;
        $classrooms = DB::table('classroom_student')
                        ->where('user_id', $user)
                        ->join('classrooms', 'classroom_student.classroom_id', '=', 'classrooms.id')
                        ->select('classrooms.*')
                        ->get();

        $schools = DB::table('classroom_student')
                      ->join('school_classroom', 'classroom_student.classroom_id', '=', 'school_classroom.classroom_id')
                      ->groupBy('school_id')
                      ->where('user_id', $user)
                      ->get();

        $data = [
            "classrooms" => $classrooms,
            "schools" => $schools
        ];
        return view('dashboard/dashboard', $data);
    }
}
