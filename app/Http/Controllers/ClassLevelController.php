<?php

namespace App\Http\Controllers;

use App\Models\ClassLevel;
use Illuminate\Http\Request;

class ClassLevelController extends Controller
{
    public function store(Request $request)
    {
        $data = new ClassLevel();
        $data->school_level_id = $request->school_id;
        $data->classlevel_name=$request->name;
        $data->save();
        return redirect()->back();
    }

}
