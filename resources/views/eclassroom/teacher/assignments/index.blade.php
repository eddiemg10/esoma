@extends('layouts.eclassroomTeacherLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href={{url('/classroom/teacher/school/'.$school->id)}}
        class="hover:text-blue-900">{{$school->name}}</a> |
    <a href={{url('/classroom/teacher/'. $classroom->id)}} class="hover:text-blue-900"> {{$classroom->name}} |</a>
    <a href="#" class="text-blue-rich font-normal"> Assignments </a>

</span>

@endsection

<div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">

    <div class="bg-white w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col">

        <div class="bg-pink-600 py-4 text-xl font-bold text-white rounded-t-3xl">{{$classroom->name}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">Assignment Quizzes</h1>
        <p class="text-sm text-slate-400 font-light mt-2">(Click to open quiz)</p>


        @if (session('success'))
        <div class="flex justify-center">
            <div
                class="w-[25%] mt-[98px] flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md absolute">
                {{ session('success')}}
            </div>

        </div>
        @endif

        <div class="flex flex-col gap-y-5 px-5 mt-10 items-center ">
            <a href={{url()->current()."/create"}} class="p-3 bg-zinc-700 hover:shadow-md text-white w-[40%]
                rounded-md">Create Assignment
                Quiz</a>

            <div class="w-[90%] h-[3px] bg-zinc-400 mt-10  mb-10"></div>
            <h1 class="text-xl font-semibold text-zinc-500">All assignments</h1>
            @foreach ($assignments as $assignment)

            <a href={{"/classroom/teacher/".$classID."/assignments/".$assignment->id}} class="bg-rose-200 px-7 w-full
                py-3 shadow-md hover:cursor-pointer transition assignment text-left"
                id={{$assignment->id}}>
                <span> {{$assignment->title}} </span>

                <span
                    class="float-right text-zinc-500 font-bold">{{\Carbon\Carbon::parse($assignment->created_on)->format('d
                    M Y H:i')}}</span>
            </a>

            @endforeach

            @if(count($assignments) == 0)
            <div class="bg-sky-100 text-xl w-full py-4 text-zinc-400 shadow-md transition assignment">
                No Quizzes have been assigned

            </div>
            @endif
        </div>
    </div>


</div>
</div>

@endsection