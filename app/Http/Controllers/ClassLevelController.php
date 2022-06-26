<?php

namespace App\Http\Controllers;

use App\Models\ClassLevel;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class ClassLevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
        $data = new ClassLevel();
        $data->school_level_id = $request->school_id;
        $data->classlevel_name = $request->name;
        $data->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = ClassLevel::find($id);
        $data->classlevel_name = $request->name;
        $data->update();
        return redirect()->back();
    }

    public function delete(Request $request)
    {

        $data = $request->input('data')['class1'];
        $class = ClassLevel::find($data);
        $class->delete();

    }
}
