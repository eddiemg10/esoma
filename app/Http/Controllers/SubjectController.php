<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectLevel;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $data = new SubjectLevel();
        $data->class_level_id = $request->class_id;
        $data->subject_name=$request->name;
        $data->save();
        return redirect()->back();
    }
}
