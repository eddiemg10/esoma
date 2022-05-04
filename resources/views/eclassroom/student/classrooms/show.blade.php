@extends('layouts.eclassroomStudentLayout')
@section('main_content')


<style>
    .active{
        @apply bg-yellow-600;
    }
    
</style>



    @section('bread_crumbs')
    <span class="text-slate-400 hover:cursor-pointer"> <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> | <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> | <a href="#" class="text-blue-rich font-normal"> {{$page}} </a> </span>
    @endsection


    <div class="flex w-[full] px-5 gap-10 justify-center flex-wrap" id="content">
        
        <div class="bg-white w-[80%] pb-20 text-center shadow-md rounded-3xl classroom flex flex-col gap-y-10" id={{$classroom->id}}>
            <div>
                <div class="bg-green-500 py-4 text-xl font-bold text-white rounded-t-3xl">{{$classroom->name}}</div>

                <p class="font-thin">{{$classroom->description}}</p>
                <p class="font-thin">Subject: {{$classroom->subject}}</p>
                <p>Teacher: {{$classroom->teacher}}</p>
                <p>Created: {{$classroom->created_at}}</p>
                <p>Joined: {{ \Carbon\Carbon::parse($classroom->joined_on)->diffForHumans()}}</p>
                <p class="p-3 {{$classroom->status == 1 ? 'bg-green-300' : 'bg-red-400'}}">{{$classroom->status == 1? 'Active' : 'Innactive'}}</p>
            </div>
        
            <div class="flex flex-col gap-y-[80px] items-start px-10">
                <div class="flex flex-col items-start w-full ">
                    <h1 class="text-4xl text-zinc-500">Class Material</h1>
                    <p class="font-light text-sm ml-3 mt-2 text-zinc-500">2 items available</p>
                    <a href="#" class="bg-blue-rich hover:cursor-pointer text-white text-xl mt-10 w-full py-[6px] ">Access Uploaded Material</a>
                </div>

                <div class="flex flex-col items-start w-full ">
                    <h1 class="text-4xl text-zinc-500">Assignments</h1>
                    <p class="font-light text-sm ml-3 mt-2 text-zinc-500">2 new items</p>
                    <a href={{url()->current()."/assignments"}} class="bg-blue-rich hover:cursor-pointer text-white text-xl mt-10 w-full py-[6px] ">Access Assignments</a>
                </div>

                <div class="flex flex-col items-start w-full ">
                    <h1 class="text-4xl text-zinc-500">Assignment Results</h1>
                    <p class="font-light text-sm ml-3 mt-2 text-zinc-500">4 items available</p>
                    <a href="#" class="bg-blue-rich hover:cursor-pointer text-white text-xl mt-10 w-full py-[6px] ">Access Assignment Results</a>
                </div>
                
                
            </div>
        
        </div> 
        
        

    </div>




<script>

$(document).ready(()=>{

    
    
});


</script>

@endsection