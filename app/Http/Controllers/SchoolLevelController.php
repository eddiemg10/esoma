<?php

namespace App\Http\Controllers;

use App\Models\ClassLevel;
use App\Models\School;
use Illuminate\Http\Request;
use App\Models\SchoolLevel;
use App\Models\SubjectLevel;
use Illuminate\Support\Facades\DB;
use App\Models\FileLibLevel;


class SchoolLevelController extends Controller
{
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

    public function show($id)
    {

        $schools = SchoolLevel::all();
        $classes = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->get();
        //$files = FileLibLevel::where('subject_id', $id)->count(); //counting files in a class
        $subjects = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->where('subjects.class_level_id', $id)
            ->get();

        $schooltitle = DB::table('school_level')
            ->join('class_level', 'class_level.school_level_id', '=', 'school_level.id')
            ->select('school_level.*')
            ->where('class_level.id', $id)
            ->get();

        $classtitle = DB::table('class_level')
            ->select('class_level.*')
            ->where('class_level.id', $id)
            ->get();

        $fileuploads = DB::table('file_uploads')
            ->join('subjects', 'subjects.id', '=', 'file_uploads.subject_id')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('file_uploads.*')
            ->where('class_level.id', $id)
            ->get();

        $data = [
            'schools' => $schools,
            'classes' => $classes,
            'subjects' => $subjects,
            'classtitle' => $classtitle,
            'schooltitle' => $schooltitle,
            'fileuploads' => $fileuploads,
        ];

        return view('elib/user/libuser_dash', $data);
    }

    public function showsub($id)
    {

        $schools = SchoolLevel::all();
        $classes = DB::table('class_level')
            ->join('school_level', 'school_level.id', '=', 'class_level.school_level_id')
            ->select('class_level.*')
            ->get();
        //$files = FileLibLevel::where('subject_id', $id)->count(); //counting files in a class
        $subjects = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->where('subjects.class_level_id', $id)
            ->get();

        $schooltitle = DB::table('school_level')
            ->join('class_level', 'class_level.school_level_id', '=', 'school_level.id')
            ->select('school_level.*')
            ->where('class_level.id', $id)
            ->get();

        $classtitle = DB::table('class_level')
            ->select('class_level.*')
            ->where('class_level.id', $id)
            ->get();

        $subtitle = DB::table('subjects')
            ->join('class_level', 'class_level.id', '=', 'subjects.class_level_id')
            ->select('subjects.*')
            ->where('class_level.id', $id)
            ->get();

        $fileuploads = DB::table('file_uploads')
            ->join('subjects', 'subjects.id', '=', 'file_uploads.subject_id')
            ->select('file_uploads.*')
            ->where('subjects.id', $id)
            ->get();
            
        $data = [
            'schools' => $schools,
            'classes' => $classes,
            'subjects' => $subjects,
            'classtitle' => $classtitle,
            'schooltitle' => $schooltitle,
            'subtitle' => $subtitle,
            'fileuploads' => $fileuploads,

        ];

        return view('elib/user/show', $data);
    }
}
