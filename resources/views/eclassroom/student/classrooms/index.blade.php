@extends('layouts.eclassroomStudentLayout')
@section('main_content')

    @section('bread_crumbs')
    <span class="text-slate-400 hover:cursor-pointer"><a href={{url('/')}} id="home-nav">Esoma</a> | <a class="text-blue-rich font-normal">Classrooms</a> </span>
    @endsection

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
  


<script>

$(document).ready(()=>{

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