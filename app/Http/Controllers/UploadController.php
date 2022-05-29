<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploadeddoc;
use App\Models\Classroom;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function create()
    {
        $data=Uploadeddoc::all();
        return view ('eclassroom/teacher/content/upload');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $file=$request->file('doc');
        $data['doc']='doc_'.time().".{$file->guessClientExtension()}";
        $file->move('assets/',$data['doc']);
        Uploadeddoc::create($data);
       
        return back();
    }
    public function show($id)
    {
        $docs=Uploadeddoc::where('classroom_id', $id)->get();
        $classroom = Classroom::select('name')->where('id', $id)->get()[0]->name;

        $data = [
            "title" => "EClassroom | ".$classroom,
            "page" => $classroom,
            "pageID" => $id,
            "uploads" => $docs
        ];
        return view('eclassroom/student/uploads/show',$data);
    }
}   

