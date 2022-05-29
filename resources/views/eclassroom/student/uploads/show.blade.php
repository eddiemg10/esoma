@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> |
    <a href={{url('classroom/student/'.$pageID)}} class="hover:text-blue-900"> {{$page}} </a> |
    <a href="#" class="text-blue-rich font-normal">Uploads</a>

</span>
@endsection

<div class="text-center mb-10 p-15 text-3xl mt-10 text-zinc-500">Class Uploads</div>



@if(count($uploads)==0)
<div class="w-full flex justify-center">
    <div class="bg-sky-100 text-xl w-[90%] text-center py-4 text-zinc-400 shadow-md transition assignment">
        No class uploads yet

    </div>
</div>

@endif

@foreach($uploads as $upload)
<div
    class="ml-20 mt-8 p-2 rounded-lg bg-sky-500 shadow-md hover:bg-sky-800 cursor-pointer transition assignment text-left">

    <a href={{asset('assets/'.$upload->doc)}}
        target="_blank">{{$upload->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$upload->description}}&nbsp;&nbsp;&nbsp;&nbsp;{{$upload->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a class="fa-solid fa-download" href="#"></a>
</div>

@endforeach

@endsection