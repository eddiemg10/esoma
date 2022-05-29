@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> |
    <a href={{url('classroom/student/'.$pageID)}} class=" hover:text-blue-900"> {{$page}} </a> |
    <a href="#" class="text-blue-rich font-normal"> Assignments </a>

</span>

@endsection

<div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">

    <div class="bg-white w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col">

        <div class="bg-green-500 py-4 text-xl font-bold text-white rounded-t-3xl">{{$page}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">Assignment Quizzes</h1>
        <p class="text-sm text-slate-400 font-light mt-2">(Click to attempt quiz)</p>

        <div class="flex flex-col gap-y-5 px-5 mt-10">
            @foreach ($assignments as $assignment)

            <a href={{"/classroom/student/".$pageID."/assignments/".$assignment->id}} class="bg-sky-200 pl-7 w-full py-3
                shadow-md hover:cursor-pointer transition assignment text-left" id={{$assignment->id}}>
                {{$assignment->title}}
            </a>

            @endforeach

            @if(count($assignments) == 0)
            <div class="bg-sky-100 text-xl w-full py-4 text-zinc-400 shadow-md transition assignment">
                No new Quizzes have been uploaded

            </div>
            @endif
        </div>
    </div>


</div>
</div>

@endsection