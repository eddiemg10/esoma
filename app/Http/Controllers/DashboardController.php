<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    

    public function index(){

        $user = 1;
        $classrooms = ClassroomStudent::where('user_id', $user)->count();
        return $classrooms;
        $data = [];
        return view('dashboard/dashboard', $data);
    }
}
