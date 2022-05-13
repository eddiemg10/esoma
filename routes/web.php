<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SchoolController;


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

Route::get('/classroom/student/{id}/results', [AssignmentResultController::class, 'index']);
Route::get('/classroom/student/{id}/results/{asmt}', [AssignmentResultController::class, 'show']);

Route::post('/assignments', [AssignmentController::class, 'store']);
Route::post('/assignments/submit', [AssignmentController::class, 'check']);
Route::get('/test', [AssignmentController::class, 'test']);

Route::get('/classroom/school', [SchoolController::class, 'classrooms']);


Route::get('/classroom/teacher/', [TeacherController ::class, 'show']);


// Components
Route::get('/choiceinput/{counter}', function($counter){
    return view('components/choice-input', ['counter' =>$counter]);
});

Route::get('/assignmentform/{counter}', function($counter){
    return view('components/question-form', ['counter' =>$counter]);
});


Route::get('/submitnotification/{classID}/{assignment}', function($classID, $assignment){
    return view('components/submitted-notification', ['classID' => $classID, 'assignment'=>$assignment]);
});

Route::get('/upload',[UploadController::class,'create']);
Route::post('/upload',[UploadController::class,'store']);
Route::get('/show',[UploadController::class,'show']);





Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/elib', function(){
    return view('elib/user/libuser_dash');
});

Route::get('/elibrary/pp1/1', function(){
    return view('elib/user/show');
});

Route::get('/aboutus', function(){
    return view('aboutus', ['title'=>'Aboutus Page']);
});
Route::get('/eclassroom', function(){
    return view('eclassroom', ['title'=>'Eclassroom Page']);
});

Route::get('/student_management',[SchoolController::class,'student_management']);
Route::get('/addteacher',[SchoolController::class,'addteacher']);
Route::get('/teacher_management',[SchoolController::class,'teacher_management']);
Route::get('/viewteacher',[SchoolController::class,'viewteacher']);


