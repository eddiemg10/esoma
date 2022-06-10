@extends('layouts.eclassroomTeacherLayout')
@section('main_content')


<style>
    .active {
        @apply bg-yellow-600;
    }
</style>



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href={{url('/classroom/teacher/school/'.$school->id)}}
        class="hover:text-blue-900">{{$school->name}} |</a>
    <a href="#" class="text-blue-rich font-normal"> {{$classroom->name}} </a>
</span>
@endsection


<div class="flex w-[full] px-5 gap-10 justify-center flex-wrap" id="content">

    <div class="bg-white w-[80%] pb-20 text-center shadow-md rounded-3xl classroom flex flex-col gap-y-10"
        id={{$classroom->id}}>
        <div>
            <div class="bg-pink-600 py-4 text-xl font-bold text-white rounded-t-3xl">{{$classroom->name}}</div>
        </div>

        <div class="relative flex flex-col items-start px-10">
            <p class="font-light">{{$classroom->description}}</p>
            <p class="absolute right-10 top-0 text-sm text-zinc-500"><span class="font-bold">Created</span> {{
                \Carbon\Carbon::parse($classroom->joined_on)->diffForHumans()}}</p>
            <p
                class=" inline-block absolute top-10 right-10 py-1 rounded-full px-4 font-bold text-md {{$classroom->status == 1 ? 'bg-green-100 text-green-500' : 'bg-red-400'}}">
                {{$classroom->status == 1? 'Active' : 'Innactive'}}</p>
            <p class="text-lg mt-12 mb-5">Subject: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full">
                    {{$classroom->subject}} </span></p>
            <p class="text-lg mb-5">Teacher: <span
                    class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$classroom->firstName."
                    ".$classroom->secondName}}</span> </p>
            <p class="text-lg">Students Enrolled: <span
                    class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$students}}</span> </p>
        </div>


        <div class="w-full flex flex-col items-center">

            <p class="text-xl mt-12">Access Code: <span class="bg-slate-100 font-light py-1 px-3 rounded-md">
                    {{$classroom->access_code}} </span></p>
            <p class="mt-3 text-xs text-zinc-400 font-roboto">Share this Code with your students to invite them to join
                this class
            </p>

            <div class="w-[90%] h-[3px] bg-zinc-400 mt-10  mb-10"></div>

        </div>

        <div class="flex flex-col gap-y-[80px] items-start px-10">
            <div class="flex flex-col items-start w-full ">
                <h1 class="text-4xl text-zinc-500">Class Material</h1>
                <p class="font-light text-sm ml-3 mt-2 text-zinc-500">@if($uploads ===1)1 item posted @else
                    {{$uploads}} items posted @endif</p>
                <a href={{url()->current()."/upload"}} class="bg-pink-600 hover:cursor-pointer text-white text-xl
                    mt-10 w-full py-[6px] ">
                    Upload Material</a>
            </div>

            <div class="flex flex-col items-start w-full ">
                <h1 class="text-4xl text-zinc-500">Assignments</h1>
                <p class="font-light text-sm ml-3 mt-2 text-zinc-500">@if ($assignments > 1) {{$assignments."
                    assignments"}}
                    @elseif($assignments === 1)1 assignment
                    @else No assignments @endif
                </p>
                <a href={{url()->current()."/assignments"}} class="bg-pink-600 hover:cursor-pointer text-white text-xl
                    mt-10 w-full py-[6px] ">Create Assignments</a>
            </div>


        </div>

    </div>



</div>




<script>
    $(document).ready(()=>{

    
    
});


</script>

@endsection