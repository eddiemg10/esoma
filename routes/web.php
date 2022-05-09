<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title'=>'Home']);
});

Route::get('/classroom', function(){
    return view('eclassroom/classroom_dashboard', ['title' => 'EClassroom']);

});

Route::get('/classroom/student', [ClassroomController::class, 'index']);

Route::get('/classroom/student/{id}', [ClassroomController::class, 'show']);

Route::get('/classroom/student/{id}/assignments', [AssignmentController::class, 'index']);



Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/elib', function(){
    return view('elib/user/libuser_dash');
});

Route::get('/elibrary/pp1/1', function(){
    return view('elib/user/show');
});


