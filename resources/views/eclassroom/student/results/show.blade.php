@extends('layouts.eclassroomStudentLayout')


@section('main_content')



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> |
    <a href={{url('classroom/student/'.$pageID)}} class=" hover:text-blue-900"> {{$page}} </a> |
    <a href={{url('classroom/student/'.$pageID.'/results')}} class="hover:text-blue-900"> Results </a> |
    <a href="#" class="text-blue-rich font-normal">{{$assignment->title.' results'}}</a>

</span>

@endsection

<div class="flex flex-col w-full px-5 gap-y-5 justify-center items-center" id="content">


    <div class="bg-white w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col items-center">

        <div class="bg-amber-500 py-4 text-xl font-bold text-white rounded-t-3xl w-full">{{$page}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">{{$assignment->title}}</h1>
        <p class="text-sm text-slate-400 font-light mt-2">(failed questions have red outlines)</p>

        <div class="mt-10 w-[20%] bg-green-50 border-2 border-green-600 rounded-lg p-3">
            <div class="font-medium text-2xl text-zinc-500">Score</div>
            <span class="text-2xl font-bold text-green-600">{{$results->score}} </span> /
            <span class="text-zinc-500">{{$assignment->total_marks}}</span>
        </div>

        <div class="flex flex-col gap-y-5 mt-10 px-10 w-[100%]" id="quiz-content">
            <div class="w-full flex flex-col items-start">
                @foreach ($quiz as $i =>$que)

                <?php 
                    $failed = false;
                    if(in_array($que['id'], $results->failed_questions)){
                        $failed = true;
                    } 
                ?>

                <div
                    class="{{$failed ? 'border-4 rounded-xl border-red-500':'border-4 rounded-xl border-green-500'}} w-[100%] p-2 mb-10 ">
                    <p class="pl-5 text-lg bg-zinc-100 rounded-xl w-full text-left py-5"><span
                            class="font-black text-xl">{{($i+1).". "}}</span>{{$que['question']}}</p>

                    <div class="py-5 w-[100%]">

                        <?php $alphabet = range('A', 'Z'); ?>

                        @foreach($que['choices'] as $i=>$choice)
                        <p
                            class="choice {{($que['answer'] ===$choice)? 'bg-green-300' : 'bg-sky-100'}} hover:cursor-default transition py-4 my-3 text-left pl-10">
                            <span class="font-black pr-2">{{$alphabet[$i].". "}}</span>{{$choice}}
                        </p>
                        @endforeach
                    </div>
                </div>

                @endforeach


                @if(count($quiz) == 0)
                <div class="bg-sky-100 text-xl w-full py-4 text-zinc-400 shadow-md transition assignment">
                    This quiz has no questions
                </div>
                @endif
            </div>


        </div>
    </div>


</div>
</div>

<script>
    $(document).ready(function(){
            

        });
</script>

@endsection