@extends('layouts.eclassroomStudentLayout')
@section('main_content')


<style>
    .active {
        @apply bg-yellow-600;
    }
</style>



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer"> <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> | <a href="#" class="text-blue-rich font-normal"> {{$page}} </a>
</span>
@endsection


<div class="flex w-[full] px-5 gap-10 justify-center flex-wrap" id="content">

    <div class="bg-white w-[80%] pb-20 text-center shadow-md rounded-3xl classroom flex flex-col gap-y-10" id={{$classroom->id}}>
        <div>
            <div class="bg-green-500 py-4 text-xl font-bold text-white rounded-t-3xl">{{$classroom->name}}</div>
        </div>

        <div class="relative flex flex-col items-start px-10">
            <p class="font-light">{{$classroom->description}}</p>
            <p class="absolute right-10 top-0 text-sm text-zinc-500"><span class="font-bold">Joined</span> {{
                \Carbon\Carbon::parse($classroom->joined_on)->diffForHumans()}}</p>
            <p class=" inline-block absolute top-10 right-10 py-1 rounded-full px-4 font-bold text-md {{$classroom->status == 1 ? 'bg-green-100 text-green-500' : 'bg-red-400'}}">
                {{$classroom->status == 1? 'Active' : 'Innactive'}}
            </p>
            <p class="text-lg mt-12 mb-5">Subject: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full">
                    {{$classroom->subject}} </span></p>
            <p class="text-lg">Teacher: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$classroom->firstName."
                    ".$classroom->secondName}}</span> </p>
        </div>

        <div class="flex flex-col gap-y-[80px] items-start px-10">
            <div class="flex flex-col items-start w-full ">
                <h1 class="text-4xl text-zinc-500">Class Material</h1>
                <p class="font-light text-sm ml-3 mt-2 text-zinc-500">@if($uploads ===1)1 item available @else
                    {{$uploads}} items available @endif
                </p>
                <a href={{url()->current()."/uploads"}} class="bg-blue-rich hover:cursor-pointer text-white text-xl
                    mt-10 w-full py-[6px] ">Access
                    Uploaded Material</a>
            </div>

            <div class="flex flex-col items-start w-full ">
                <h1 class="text-4xl text-zinc-500">Assignments</h1>
                <p class="font-light text-sm ml-3 mt-2 text-zinc-500">@if ($assignments > 1) {{$assignments." new
                    items"}}
                    <x-notification-bubble /> @elseif($assignments === 1)1 new item
                    <x-notification-bubble /> @else No new assignments @endif
                </p>
                <a href={{url()->current()."/assignments"}} class="bg-blue-rich hover:cursor-pointer text-white text-xl
                    mt-10 w-full py-[6px] ">Access Assignments</a>
            </div>

            <div class="flex flex-col items-start w-full ">
                <h1 class="text-4xl text-zinc-500">Assignment Results</h1>
                <p class="font-light text-sm ml-3 mt-2 text-zinc-500">@if($results ===1)1 item available @else
                    {{$results}} items available @endif
                </p>
                <a href={{url()->current()."/results"}} class="bg-blue-rich hover:cursor-pointer text-white text-xl
                    mt-10 w-full py-[6px] ">Access Assignment Results</a>
            </div>


        </div>

    </div>



</div>




<script>
    $(document).ready(() => {



    });
</script>

@endsection