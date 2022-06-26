<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolTeacherController;
use App\Http\Controllers\SchoolLevelController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\DB;
use App\Models\Uploadeddoc;
use App\Http\Controllers\ClassLevelController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\SubscriptionController;
use App\Models\ClassLevel;
use App\Models\Payment;
use App\Models\SchoolLevel;
use App\Models\SubjectLevel;

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

// Route::domain('blog.'.env('APP_URL'))->name('blog.')->group(function(){
//     Route::resource('posts', PostController::class);
//     Route::get('/tags', [TagController::class,'create'])->name('tags.create');
//     Route::get('/', [BlogController::class, 'index'])->name('index');
//     Route::get('/{id}', [BlogController::class, 'show'])->name('show');
// });


Route::prefix('blog')->group(function(){


    Route::resource('posts', PostController::class, ['as'=> 'blog']);
    Route::get('/tags', [TagController::class,'create'])->name('tags.create');
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blog.show');

});



Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/classroom', function () {
    return view('eclassroom/classroom_dashboard', ['title' => 'EClassroom']);
})->name('classroom');

Route::get('/elib/{name}/{subname}', [SchoolLevelController::class, 'showSubject']);


Route::get('/elibrary/pp1/1', function(){
    return view('elib/user/show');
});

Route::get('/elibrary/pp1/1', function () {
    return view('elib/user/show');
});

Route::get('/premium/{id}', function(){
    return view('aboutus');
})->middleware('is_premium');

Route::get('/aboutus', function () {
    return view('aboutus', ['title' => 'Aboutus Page']);
});


Route::get('/elib/PP1', [SchoolLevelController::class, 'show']);
Route::get('/elib/{name}',
 [SchoolLevelController::class, 'show']);

Route::middleware(['auth'])->group(function(){

Route::get('/classroom/student', [ClassroomController::class, 'index']);

Route::get('/classroom/student/{id}', [ClassroomController::class, 'show']);
Route::put('/classroom', [ClassroomController::class, 'update']);
Route::post('/classroom', [SchoolController::class, 'store']);
Route::post('/classroom/enroll', [ClassroomController::class, 'enroll']);



Route::get('/classroom/student/{id}/uploads', [UploadController::class, 'show']);


Route::get('/classroom/student/{id}/assignments', [AssignmentController::class, 'index']);
Route::get('/classroom/student/{id}/assignments/{asmt}', [AssignmentController::class, 'show']);

Route::get('/classroom/student/{id}/results', [AssignmentResultController::class, 'index']);
Route::get('/classroom/student/{id}/results/{asmt}', [AssignmentResultController::class, 'show']);

Route::post('/assignments', [AssignmentController::class, 'store']);
Route::post('/assignments/submit', [AssignmentController::class, 'check']);
Route::post('/assignments/delete', [AssignmentController::class, 'delete']);
Route::get('/test', [AssignmentController::class, 'test']);

Route::post('/upload/delete', [UploadController::class, 'delete']);
Route::post('/upload/update', [UploadController::class, 'update']);




Route::get('/classroom/school/students', [SchoolController::class, 'student_management']);
Route::get('/classroom/school/teachers', [SchoolController::class, 'teacher_management']);
Route::get('/classroom/school/register', function(){return view('eclassroom/school/register');});
Route::post('/classroom/school/register', [SchoolController::class, 'register']);
Route::get('/classroom/school', [SchoolController::class, 'allClassrooms'])->middleware('has_classroom');
Route::get('/classroom/school/{id}', [SchoolController::class, 'showClassroom']); 

Route::get('/classroom/teacher/', [TeacherController::class, 'showSchools'])->middleware('is_teacher');
Route::get('/classroom/teacher/register', function(){return view('eclassroom/teacher/register');});
Route::post('/classroom/teacher/register', [TeacherController::class, 'register']);
Route::get('/classroom/teacher/school/{id}', [TeacherController::class, 'index']);
Route::get('/classroom/teacher/{id}', [TeacherController::class, 'show']);
Route::get('/classroom/teacher/{id}/assignments', [TeacherController::class, 'showAllAssignments']);
Route::get('/classroom/teacher/{id}/upload', [UploadController ::class, 'create']);
Route::get('/classroom/teacher/{classID}/assignments/create', [TeacherController::class, 'store']);
Route::get('/classroom/teacher/{classID}/assignments/{assignmentID}', [TeacherController::class, 'showAssignment']);



Route::get('/classroom/ass', function(){return view('eclassroom/teacher/assignments/store');});



Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/activate', [DashboardController::class, 'activate']);

Route::post('/subscribe', [SubscriptionController::class, 'subscribe']);



// Components
Route::get('/choiceinput/{counter}', function ($counter) {
    return view('components/choice-input', ['counter' => $counter]);
});

Route::get('/assignmentform/{counter}', function ($counter) {
    return view('components/question-form', ['counter' => $counter]);
});


Route::get('/submitnotification/{classID}/{assignment}', function ($classID, $assignment) {
    return view('components/submitted-notification', ['classID' => $classID, 'assignment' => $assignment]);
});

Route::get('/classroom/students/{classID}', function ($classID) {
    $students = DB::table('classroom_student')
        ->join('users', 'classroom_student.user_id', '=', 'users.id')
        ->where('classroom_student.classroom_id', $classID)
        ->select('users.firstName', 'users.secondName', 'users.email', 'classroom_student.created_at as joined_on')
        ->get();
    return view('components/students-table', ['students' => $students]);
});
Route::get('/classroom/uploads/{classID}', function ($classID) {
    $work= DB::table('uploadeddocs')
    ->join('classrooms','uploadeddocs.classroom_id','=','id')
    ->where('uploadeddocs.classroom_id',$classID)
    ->select('name','doc')
    ->get();
});

Route::get('/upload', [UploadController::class, 'create']);
Route::post('/upload', [UploadController::class, 'store']);





Route::get('/welcome', function () {
    return view('welcome');
});





Route::get('/adminview', [SchoolLevelController::class, 'adminview']);


Route::get('/admin', [SchoolLevelController::class, 'uploadpage']);


Route::post('/addschool', [SchoolLevelController::class, 'store']);
Route::post('/editschool/{id}', [SchoolLevelController::class, 'update']);
Route::post('/school/delete', [SchoolLevelController::class, 'delete']);



Route::post('/addclass', [ClassLevelController::class, 'store']);
Route::post('/editclass/{id}', [ClassLevelController::class, 'update']);

Route::post('/libclass/delete', [ClassLevelController::class, 'delete']);



Route::post('/addschool', [SchoolLevelController::class, 'store']);
Route::post('/editschool/{id}', [SchoolLevelController::class, 'update']);
Route::post('/school/delete', [SchoolLevelController::class, 'delete']);


Route::post('/addclass', [ClassLevelController::class, 'store']);
Route::post('/editclass/{id}', [ClassLevelController::class, 'update']);

Route::post('/libclass/delete', [ClassLevelController::class, 'delete']);


Route::post('/addsubject', [SubjectController::class, 'store']);
Route::post('/editsubject/{id}', [SubjectController::class, 'update']);

Route::post('/subject/delete', [SubjectController::class, 'delete']);

Route::post('/addfile', [FileController::class, 'store']);
Route::post('/editfile/{id}', [FileController::class, 'update']);

Route::post('/fileupload/delete', [FileController::class, 'delete']);

Route::post('/fileupload/delete', [FileController::class, 'delete']);



//live search
Route::post('/students/search', [SchoolController::class, 'searchStudent'])->name('students-search');

Route::post('/teacher/delete', [SchoolTeacherController::class, 'delete']);
Route::post('/teacher/block', [SchoolTeacherController::class, 'block']);

Route::post('/classes/teachers',[SchoolTeacherController::class, 'addTeacher'])->name('add-teacher');




Route::get('/sign-up', function(){
    return view('authentication/sign-up');
});

Route::get('/sign-in', function(){
    return view('authentication/sign-in');
});


Route::get('/view-subscription', function(){
    return view('dashboard/view-subscription');
});

Route::get('/view-payment-history', function(){
    return view('dashboard/view-payment-history');
});

});
require __DIR__.'/auth.php';

