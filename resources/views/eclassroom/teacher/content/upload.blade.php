@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
@endsection

<h2 class="text-center p-15 text-3xl mt-10 text-amber-700 ">Class Uploads</h2>

<form method = "POST" action = "/upload" enctype = "multipart/form-data">
    @csrf 
  
    <input class="ml-20 mt-8 p-5" type = "text" name="name" placeholder="Enter title">
    <input class="ml-20 mt-8 p-5" type = "text" name="description" placeholder="Enter description">
    <input class="ml-20 mt-8 p-5" type = "file" name="doc">
    <input class="ml-20 mt-8 p-2 rounded-lg bg-orange-500 shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left" type = "submit" name="Upload">
</form>

@endsection