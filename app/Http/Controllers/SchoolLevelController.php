<?php

namespace App\Http\Controllers;

use App\Models\ClassLevel;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\SchoolLevel;
use App\Models\SubjectLevel;
use App\Models\Subscription;
use Illuminate\Support\Facades\DB;
use App\Models\FileLibLevel;
use Illuminate\Support\Facades\Auth;

class SchoolLevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadpage()
    {
        $schools = SchoolLevel::all();
        $classes = ClassLevel::all();
        $subjects = SubjectLevel::all();
        return view('elib/admin/admin_dash', compact('schools', 'classes', 'subjects'));
    }

    public function store(Request $request)
    {
        $data = new SchoolLevel();
        $data->schoollevel_name = $request->name;
        $data->save();
        return redirect()->back();
    }



    public function update(Request $request, $id)
    {
        $data = SchoolLevel::find($id);
        $data->schoollevel_name = $request->name;
        $data->update();
        return redirect()->back();
    }

    public function delete(Request $request)
    {

        $data = $request->input('data')['school'];
        $school = SchoolLevel::find($data);
        $school->delete();
        $request->session()->flash('success', 'School successfully deleted');
        // return redirect()->back();
    }

    public function show($id=1)

    {
        $schools = SchoolLevel::all();

        // $id = DB::table('class_level')
        //     ->select('class_level.id')
        //     ->where('classlevel_name', $name)
        //     ->first()->id;
      

        $selectedschool = DB::table('school_level')
            ->join('class_level', 'class_level.school_level_id', '=', 'school_level.id')
            ->select('school_level.*')
            ->where('class_level.id', $id)
            ->first();

        $classes = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->get();

        $selectedclass = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->where('class_level.id', $id)
            ->first();




        $subjects = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->where('subjects.class_level_id', $id)
            ->get();

        $selectedsubject = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->where('class_level.id', $id)
            ->first();


        $fileuploads = DB::table('file_uploads')
            ->join('subjects', 'subjects.id', '=', 'file_uploads.subject_id')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('file_uploads.*')
            ->where('class_level.id', $id)
            ->get();

        $data = [
            'schools' => $schools,
            'selectedschool' => $selectedschool,
            'classes' => $classes,
            'selectedclass' => $selectedclass,
            'subjects' => $subjects,
            'fileuploads' => $fileuploads,
        ];


        return view('elib/user/libuser_dash', $data);
    }

    public function showSubject($name="PP1", $sub_name) //the class
    {

        $schools = SchoolLevel::all();

        $id = DB::table('class_level')
        ->select('class_level.id')
        ->where('classlevel_name', $name)
        ->first()->id;
      

        $subject_id = DB::table('subjects')
        ->select('subjects.id')
        ->where('subject_name', $sub_name)
        ->first()->id;

        $classes = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->get();

        $selectedclass = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->where('class_level.id', $id)
            ->first();

        $selectedschool = DB::table('school_level')
            ->join('class_level', 'class_level.school_level_id', '=', 'school_level.id')
            ->select('school_level.*')
            ->where('class_level.id', $id)
            ->first();

        $subject = SubjectLevel::find($subject_id);


        $isPremiumMember = Subscription::where('user_id', Auth::User()->id)->where('valid', 1)->first();


        $fileuploads = DB::table('file_uploads')
            ->join('subjects', 'subjects.id', '=', 'file_uploads.subject_id')
            ->select('file_uploads.*')
            ->where('subjects.id', $subject_id)
            ->get();

        $data = [
            'schools' => $schools,
            'classes' => $classes,
            'subject' => $subject,
            'selectedschool' => $selectedschool,
            'selectedclass' => $selectedclass,
            'fileuploads' => $fileuploads,
            'isPremiumMember' => $isPremiumMember

        ];

        return view('elib/user/show', $data);
    }

    public function adminview($id = 6)
    {

        $schools = SchoolLevel::all();

        $classes = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->get();

        $selectedclass = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            // ->where('class_level.id', $id)
            ->first();

        $subjects = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->get();




        $fileuploads = DB::table('file_uploads')
            ->join('subjects', 'subjects.id', '=', 'file_uploads.subject_id')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('file_uploads.*')
            // ->where('class_level.id', $id)
            ->get();


        $data = [
            'schools' => $schools,
            'classes' => $classes,
            'selectedclass' => $selectedclass,
            'subjects' => $subjects,
            'fileuploads' => $fileuploads,
        ];

        return view('elib/admin/dash', $data);
    }
}
