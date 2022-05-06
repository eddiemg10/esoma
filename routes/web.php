<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\TeacherController;

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
Route::get('/classroom/student/{id}/assignments/{asmt}', [AssignmentController::class, 'show']);

Route::post('/assignments', [AssignmentController::class, 'store']);


Route::get('/classroom/teacher/', [TeacherController ::class, 'show']);




Route::get('/welcome', function(){
    return view('welcome');
});