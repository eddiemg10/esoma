<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\DB;
use App\Models\Uploadeddoc;




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
Route::put('/classroom', [ClassroomController::class, 'update']);
Route::post('/classroom', [SchoolController::class, 'store']);


Route::get('/classroom/student/{id}/uploads',[UploadController::class,'show']);


Route::get('/classroom/student/{id}/assignments', [AssignmentController::class, 'index']);
Route::get('/classroom/student/{id}/assignments/{asmt}', [AssignmentController::class, 'show']);

Route::get('/classroom/student/{id}/results', [AssignmentResultController::class, 'index']);
Route::get('/classroom/student/{id}/results/{asmt}', [AssignmentResultController::class, 'show']);

Route::post('/assignments', [AssignmentController::class, 'store']);
Route::post('/assignments/submit', [AssignmentController::class, 'check']);
Route::post('/assignments/delete', [AssignmentController::class, 'delete']);
Route::get('/test', [AssignmentController::class, 'test']);



Route::get('/classroom/school/students',[SchoolController::class,'student_management']);
Route::get('/classroom/school/teachers',[SchoolController::class,'teacher_management']);

Route::get('/classroom/school', [SchoolController::class, 'allClassrooms']);
Route::get('/classroom/school/{id}', [SchoolController::class, 'showClassroom']); 

Route::get('/classroom/teacher/', [TeacherController ::class, 'showSchools']);
Route::get('/classroom/teacher/school/{id}', [TeacherController ::class, 'index']);
Route::get('/classroom/teacher/{id}', [TeacherController ::class, 'show']);
Route::get('/classroom/teacher/{id}/assignments', [TeacherController ::class, 'showAllAssignments']);
Route::get('/classroom/teacher/{classID}/assignments/create', [TeacherController ::class, 'store']);
Route::get('/classroom/teacher/{classID}/assignments/{assignmentID}', [TeacherController ::class, 'showAssignment']);


Route::get('/classroom/ass', function(){return view('eclassroom/teacher/assignments/store');});


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

Route::get('/classroom/students/{classID}', function($classID){
    $students = DB::table('classroom_student')
                       ->join('users', 'classroom_student.user_id', '=', 'users.id')
                       ->where('classroom_student.classroom_id', $classID)
                       ->select('users.firstName', 'users.secondName', 'users.email', 'classroom_student.created_at as joined_on')
                       ->get();
    return view('components/students-table', ['students' => $students]);
});
Route::get('/classroom/uploads/{classID}', function($classID){

    $uploads=Uploadeddoc::all();
    return view('components/class-uploads', ['uploads' => $uploads]);
});

Route::get('/upload',[UploadController::class,'create']);
Route::post('/upload',[UploadController::class,'store']);





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





