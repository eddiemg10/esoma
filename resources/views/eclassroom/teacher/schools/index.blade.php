@extends('layouts.eclassroomTeacherLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href="#" class="text-blue-rich font-normal"> Schools </a>

</span>

@endsection

<div class="flex flex-col w-[100%] gap-y-5 px-5 mt-10 items-center">
    <div class="flex flex-col w-[100%] gap-y-5 px-5 mt-10 bg-white py-10 rounded-md shadow-sm">


        @if(count($schools)===0)
        <div class="w-full flex justify-center">
            <p class="text-xl text-zonc-300 font-normal bg-red-200 w-full py-4 text-center rounded-md">You have not been
                added to any school yet
            </p>
        </div>
        @endif

        <h1 class="text-center font-semibold text-zinc-500 text-2xl mb-10">Your Schools</h1>
        @foreach($schools as $school)
        <a href={{"/classroom/teacher/school/".$school->id}} class="bg-rose-200 pl-7 w-full py-3 shadow-md text-lg
            hover:cursor-pointer transition assignment text-left">
            {{$school->name}}
        </a>
        @endforeach
    </div>
</div>


@endsection