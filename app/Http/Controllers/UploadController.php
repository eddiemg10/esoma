<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uploadeddoc;
use App\Models\Classroom;
use App\Models\SchoolClassroom;
use App\Models\School;

use Exception;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function create($id)
    {
        $uploads=Uploadeddoc::where('classroom_id', $id)->orderBy('created_at', 'DESC')->get();
        
        $schoolID = SchoolClassroom::where('classroom_id', $id)->first();
        $school = School::find($schoolID)->first();


        $classroom = Classroom::find($id);

        $data = [
            "classID" => $id,
            "uploads" =>$uploads,
            "school"=>$school,
            "classroom"=>$classroom,
        
        ];
            return view('eclassroom/teacher/content/upload', $data);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $file=$request->file('doc');
        $data['doc']='doc_'.time().".{$file->guessClientExtension()}";
        $file->move('assets/',$data['doc']);
        Uploadeddoc::create($data);
       
        return redirect()->back()->with('success', 'Document successfully uploaded');
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

    public function delete(Request $request){

        
        $doc = $request->file;

        try{
            $file = Uploadeddoc::find($doc);
            $file->delete();

            unlink(public_path("/assets/".$file->doc));
        }catch(Exception $e){
            dd($e);
        }
        

        return redirect()->back()->with('success2', 'Document successfully deleted');
        
    }

    public function update(Request $request){

        
        $doc = $request->file;

        try{
            $file = Uploadeddoc::find($doc);
            $file->name = $request->name;

            $file->save();
        }catch(Exception $e){
            dd($e);
        }
        

        return redirect()->back()->with('success2', 'Document successfully updated');
        
    }
}   

