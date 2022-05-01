@extends('layouts.userLayout')
@section('content')


<style>
    .active{
        @apply bg-yellow-600;
    }
    
</style>


<div class="flex flex-col  pb-[600px] font-roboto">
    <div class="font-light flex items-end py-3 mt-7">
        <span class="w-[25%]"></span>
        <span class="text-slate-400 hover:cursor-pointer"><a href={{url('/')}}>Esoma</a> | <a href="#" class="text-blue-rich font-normal">Classrooms</a> </span>
    </div>

    <div class="flex w-full justify-center">
        <div class="md:w-[20%] md:flex flex-col pl-16 hidden">
            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Student Account</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">
                <li class="bg-zinc-100 rounded-full  xmd:w-[50%] w-[80%] hover:shadow-inner shadow-md hover:cursor-pointer transition ease-out pl-4 mb-6 nav">My Classes</li>
                <li class=" rounded-full  w-[50%] hover:shadow-inner hover:cursor-pointer transition ease-out pl-4 nav">Help</li>
            </ul>
        </div>
        <div class="md:w-[80%] w-[90%] flex md:justify-start justify-center">
            <div class="bg-zinc-100 w-[90%] pb-10 rounded-xl shadow-md">
                <h1 class="text-blue-rich font-bold text-4xl text-center mt-10 mb-20">Your Classrooms</h1>
                <div class="flex w-[full] px-5 gap-10 justify-center flex-wrap" id="content">
                    
                    @foreach ($classrooms as $classroom)
                        <div class="bg-white w-[30%] h-[16vw] text-center shadow-md hover:shadow-xl hover:cursor-pointer transition rounded-3xl classroom" id={{$classroom->id}}>
                            <a href={{url('classroom/student/'.$classroom->id)}}>

                                <h1 class="text-2xl">{{$classroom->name}}</h1>
                                <p class="font-thin">{{$classroom->description}}</p>
                                <p class="font-thin">Subject: {{$classroom->subject}}</p>
                                <p>Teacher: {{$classroom->teacher}}</p>
                                <p>Created: {{$classroom->created_at}}</p>
                                <p>Joined: {{ \Carbon\Carbon::parse($classroom->joined_on)->diffForHumans()}}</p>
                                <p class="p-3 {{$classroom->status == 1 ? 'bg-green-300' : 'bg-red-400'}}">{{$classroom->status == 1? 'Active' : 'Innactive'}}</p>
                            </a>
                        
                        </div>

                    @endforeach
    

                </div>
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(()=>{

    $(".nav").click((e)=>{
        $(e.target).addClass('bg-zinc-100 shadow-md');
        $(e.target).siblings().removeClass('bg-zinc-100 shadow-md');
    });
    
    $(".classrooms").click(function(e){
        var id = $(this).attr('id');
        var url = "<?php echo url('classroom/student/') ?>"+"/"+id;
        $.ajax({
            url: url,
            method: 'GET',

            success: function(result){
            console.log(url);

            $("#content").html(result);
        }});
    });

    
    
    
});


</script>

@endsection