<?php

namespace App\Http\Controllers;

use App\Models\FileLibLevel;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;


class FileController extends Controller
{
    public function store(Request $request)
    {
        $data = new FileLibLevel();
        $data->subject_id = $request->subject_id;
        $data->name = $request->name;
        $data->description = $request->desc;
        $file = $request->file('doc');

        $data['doc'] = 'doc_' . time() . "{$file->guessClientExtension()}";
        $file->move('assets/', $data['doc']);
        $data->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = FileLibLevel::find($id);
        $data->name = $request->name;
        $data->description = $request->desc;
        $data->update();
        return redirect()->back();
    }
    public function delete(Request $request)
    {

        $data = $request->input('data')['fileupload'];
        $file = FileLibLevel::find($data);
        $file->delete();

    }
}
