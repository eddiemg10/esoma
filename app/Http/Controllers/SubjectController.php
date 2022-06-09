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

    public function update(Request $request, $id)
    {
        $data = SubjectLevel::find($id);
        $data->subject_name = $request->name;
        $data->update();
        return redirect()->back();
    }

    public function delete(Request $request)
    {

        $data = $request->input('data')['subject'];
        $sub = SubjectLevel::find($data);
        $sub->delete();

    }
}
