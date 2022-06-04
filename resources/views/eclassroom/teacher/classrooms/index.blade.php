@extends('layouts.eclassroomTeacherLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href="#" class="text-blue-rich font-normal"> {{$school->name}} </a>

</span>

@endsection



<div class="flex w-[100%] px-5 gap-9 justify-center flex-wrap" id="content">

    @if($blocked)
    <div class="flex flex-col items-center">
        <p class='text-zinc-700 text-xl mt-20'>You have been blocked and cannot access your classes. Please
            contact your
            school
            for more information</p>

        <i class="fa-solid fa-lock fa-10x mt-20 text-zinc-600"></i>
    </div>
    @else


    @foreach ($classrooms as $classroom)
    <div class="bg-white w-[30%] relative pb-10 basis-[350px] text-center shadow-md hover:shadow-xl hover:cursor-pointer flex flex-col transition rounded-3xl classroom mt-20"
        id={{$classroom->id}}>
        <a href={{$classroom->status === 1 ? url('classroom/teacher/'.$classroom->id) : '#'}}>
            <div class="{{$classroom->status === 1 ? 'bg-pink-600': 'bg-slate-500'}} py-4 rounded-t-3xl">
                <h1 class="text-xl text-white">{{$classroom->name}}</h1>
            </div>

            <p class="text-sm absolute top-20 right-5"><span class="font-bold">Created</span> {{
                \Carbon\Carbon::parse($classroom->created_on)->diffForHumans()}}</p>
            <p
                class="text-xs absolute top-[107px] right-5 font-bold rounded-full px-3 {{$classroom->status == 1 ? 'bg-green-50 text-green-500' : 'bg-red-50 text-red-400'}}">
                {{$classroom->status == 1? 'Active' : 'Innactive'}}</p>

            <div class="mt-20 flex flex-col gap-y-4 items-start ml-5">
                <p>Teacher: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full mt-20">{{$classroom->firstName."
                        ".$classroom->secondName}}
                    </span></p>
                <p>Subject: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$classroom->subject}}</span>
                </p>
            </div>

        </a>

    </div>

    @endforeach

    @endif
</div>


@endsection