<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploadeddoc;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function create()
    {
        $data=Uploadeddoc::all();
        return view ('eclassroom/student/uploads/upload');
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
    public function show()
    {
        $data=Uploadeddoc::all();
        return view('eclassroom/student/uploads/show',compact('data'));
    }
}   

