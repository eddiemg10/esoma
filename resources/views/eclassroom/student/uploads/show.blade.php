@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
@endsection

<div class="text-center mb-10 p-15 text-3xl mt-10 text-zinc-500">Class Uploads</div>


@foreach($data as $data)
<div class= "ml-20 mt-8 p-2 rounded-lg bg-sky-500 shadow-md hover:bg-sky-800 cursor-pointer transition assignment text-left">

<a  href="{{url('/assets/',$data['doc'])}}">{{$data->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$data->description}}&nbsp;&nbsp;&nbsp;&nbsp;{{$data->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a class="fa-solid fa-download" href="#"></a>
</div>

@endforeach

@endsection
