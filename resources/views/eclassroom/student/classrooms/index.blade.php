@extends('layouts.eclassroomStudentLayout')
@section('main_content')

@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer"><a href={{url('/')}} id="home-nav">Esoma</a> | <a
        class="text-blue-rich font-normal">Classrooms</a> </span>
@endsection

<div class="flex w-[full] px-5 gap-10 justify-center flex-wrap" id="content">

    @foreach ($classrooms as $classroom)
    <div class="bg-white w-[30%] relative h-[16vw] text-center shadow-md hover:shadow-xl hover:cursor-pointer flex flex-col transition rounded-3xl classroom"
        id={{$classroom->id}}>
        <a @if ($classroom->status === 1) href={{url('classroom/student/'.$classroom->id)}} @endif>
            <div class="{{$classroom->status === 1 ? 'bg-blue-rich': 'bg-slate-500'}} py-4 rounded-t-3xl">
                <h1 class="text-xl text-white">{{$classroom->name}}</h1>
            </div>

            <p class="text-sm absolute top-20 right-5"><span class="font-bold">Joined</span> {{
                \Carbon\Carbon::parse($classroom->joined_on)->diffForHumans()}}</p>
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