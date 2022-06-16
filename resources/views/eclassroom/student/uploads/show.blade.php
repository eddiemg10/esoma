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

<div class="flex flex-col gap-y-5 items-center">
    @foreach($uploads as $i=>$upload)
    <a class="flex w-[80%] px-5 py-2  bg-blue-200 ml-14 text-xl hover:cursor-pointer" target="_blank"
        href={{asset("assets/".$upload->doc)}}>
        <p class="w-[90%] text-left pl-5">{{($i+1).". ".$upload->name}}</p>
        <i class="fa-solid fa-file-arrow-down text-zinc-700"></i>
    </a>

    @endforeach
</div>

@endsection