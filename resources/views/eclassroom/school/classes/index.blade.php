@extends('layouts.eclassroomSchoolLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href="#" class="text-blue-rich font-normal"> Manage classes </a>


</span>

@endsection

<div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">

    <div class="bg-white w-[90%] min-h-[70vh] pb-20 text-center shadow-md  rounded-3xl flex flex-col items-center">

        <div class="bg-purple-700 py-4 text-xl font-bold text-white rounded-t-3xl w-full">{{$school->name}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">Your Classes</h1>
        <button
            class="bg-blue-rich py-2 px-4 text-lg text-white w-[30%] mt-10 rounded-md hover:cursor-pointer hover:shadow-md shadow-sm">Add
            a new Class</button>

        <div class="flex w-[100%] px-5 gap-9 justify-center flex-wrap" id="content">
            @foreach ($classrooms as $classroom)
            <div class="bg-white w-[30%] relative pb-10 basis-[350px] text-center shadow-md hover:shadow-xl hover:cursor-pointer flex flex-col transition rounded-3xl classroom mt-20"
                id={{$classroom->id}}>
                <a href={{url('classroom/school/'.$classroom->id)}}>
                    <div class="{{$classroom->status === 1 ? 'bg-purple-700': 'bg-slate-500'}} py-4 rounded-t-3xl">
                        <h1 class="text-xl text-white">{{$classroom->name}}</h1>
                    </div>

                    <p class="text-sm absolute top-20 right-5"><span class="font-bold">Created</span> {{
                        \Carbon\Carbon::parse($classroom->created_on)->diffForHumans()}}</p>
                    <p
                        class="text-xs absolute top-[107px] right-5 font-bold rounded-full px-3 {{$classroom->status == 1 ? 'bg-green-50 text-green-500' : 'bg-red-50 text-red-400'}}">
                        {{$classroom->status == 1? 'Active' : 'Innactive'}}</p>

                    <div class="mt-20 flex flex-col gap-y-4 items-start ml-5">
                        <p>Teacher: <span
                                class="bg-zinc-100 font-light py-1 px-3 rounded-full mt-20">{{$classroom->teacher}}
                            </span></p>
                        <p>Subject: <span
                                class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$classroom->subject}}</span>
                        </p>
                    </div>

                </a>

            </div>

            @endforeach
        </div>


    </div>
</div>

@endsection