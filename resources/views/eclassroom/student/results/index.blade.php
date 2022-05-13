@extends('layouts.eclassroomStudentLayout')
@section('main_content')

@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> |
    <a href={{url('classroom/student/'.$pageID)}} class="hover:text-blue-900"> {{$page}} </a> |
    <a href="#" class="text-blue-rich font-normal">Results</a>

</span>
@endsection

<div class="flex flex-col w-[full] gap-y-5 px-5 mt-10" id="content">

    @foreach ($results as $i=>$result)
    <a href={{url()->full().'/'.$result->id}} class="flex items-center no-wrap bg-sky-200 px-7 w-full py-3 shadow-md
        hover:cursor-pointer
        transition
        assignment text-left">

        <p class="text-left inline-block w-[80%] text-xl text-zinc-700">{{($i+1).". ".$result->title}}</p>
        <p class="text-center inline-block w-[20%] bg-green-50d rounded-md py-2">
            <span class="text-lg">Score: </span> <span
                class="text-2xl font-black text-green-800 ml-4">{{$result->score}}</span> /
            {{$result->total_marks}}
        </p>
    </a>


    @endforeach


</div>
</div>



<script>
    $(document).ready(()=>{

    $(".results").click(function(e){
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