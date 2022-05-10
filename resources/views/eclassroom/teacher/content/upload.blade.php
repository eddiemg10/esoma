@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
@endsection

<h2 class="text-center uppercase ">Class Uploads</h2>

<form method = "POST" action = "/upload" enctype = "multipart/form-data">
    @csrf 
  
    <input type = "text" name="name" placeholder="Enter title">
    <input type = "text" name="description" placeholder="Enter description">
    <input type = "file" name="doc">
    <input type = "submit" name="Upload">
</form>

@endsection