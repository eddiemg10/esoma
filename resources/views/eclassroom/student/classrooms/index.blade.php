@extends('layouts.eclassroomStudentLayout')
@section('main_content')

@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer"><a href={{url('/')}} id="home-nav">Esoma</a> | <a
        class="text-blue-rich font-normal">Classrooms</a> </span>
@endsection

<div class="flex w-full px-5 gap-10 justify-center flex-wrap" id="content">

    <div class="w-full mb-20">
        <form method="POST" action="/classroom/enroll">
            @csrf

            <input type="hidden" name="user" value={{Auth::User()->id}}>
            <div class="flex w-full justify-center px-40">
                <input type="text" placeholder="Enter class access code" name="classroom" required autocomplete="off"
                    class="shadow appearance-none border rounded-l-md w-[40%] py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <button type="submit" class="bg-esomablue rounded-r-md w-[30%] px-3 text-white py-3">Join Class</button>
            </div>

        </form>

        @if (session('success'))
        <div class="flex justify-center">
            <div
                class="w-[25%] mt-5 flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md">
                {{ session('success')}}
            </div>

        </div>
        @endif

        @if (session('error'))
        <div class="flex justify-center">
            <div
                class="w-[25%] mt-5 flash text-red-500 font-bold border text-sm border-red-500 bg-red-50 text-center py-2 rounded-md">
                {{ session('error')}}
            </div>

        </div>
        @endif

    </div>
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