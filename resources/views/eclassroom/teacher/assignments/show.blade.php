@extends('layouts.eclassroomTeacherLayout')


@section('main_content')



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href={{url('/classroom/teacher/school/'.$school->id)}}
        class="hover:text-blue-900">{{$school->name}}</a> |
    <a href={{url('/classroom/teacher/'. $classroom->id)}} class="hover:text-blue-900"> {{$classroom->name}} |</a>
    <a href={{url('/classroom/teacher/'. $classroom->id.'/assignments')}} class="hover:text-blue-900">
        Assignments |
    </a>
    <a href="#" class="text-blue-rich font-normal">{{$assignment->title}} </a>

</span>

@endsection

<div class="flex flex-col w-full px-5 gap-y-5 justify-center items-center" id="content">


    <div
        class="bg-white relative w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col items-center">

        <div class="bg-pink-600 py-4 text-xl font-bold text-white rounded-t-3xl w-full">{{$classroom->name}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">{{$assignment->title}}</h1>
        <p class="text-sm text-slate-400 font-light mt-2">(Answers have been marked green)</p>

        <button
            class="mt-5 inline-block w-[60%] lg:w-[20%] py-2 px-2 rounded-md hover:cursor-pointer hover:shadow-md transition lg:absolute right-10 top-[90px] bg-red-500"
            id="delete-assignment" data-assignment={{$assignment->id}} data-classroom={{$classroom->id}}
            >
            <div class="" id="del-icon"> <i class="fa-solid fa-trash-can text-white"></i> <span
                    class="pl-2 text-sm text-white">Delete
                    Assignment</span> </div>

            <div id="loading" class="hidden">
                <x-loading-button width="5" />
                <span class="text-white text-sm">loading...</span>
            </div>
        </button>


        <div class="flex flex-col gap-y-5 mt-10 px-10 w-[100%]" id="quiz-content">
            <div class="w-full flex flex-col items-start">
                @foreach ($quiz as $i =>$que)

                <div class=" w-[100%] p-2 mb-10 ">
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
            

        $("#delete-assignment").click(function(e){
            let assignment  = $(this).data('assignment');
            let classroom = $(this).data('classroom');

            if (confirm('Are you sure you want to permanently delete this assignment? It will not be available to all your students')){
                $(this).prop('disabled', true);
                $(this).addClass('bg-red-400');
                $(this).removeClass('hover:cursor-pointer hover:shadow-md');
                $("#del-icon").hide();
                $("#loading").show();

                $.post("/assignments/delete", 
                {
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    data: {
                        assignment: assignment,
                        classroom: classroom,
                    },

                },

                function(data, status){

                    $("#del-icon").show();
                    $("#loading").hide();
                    $("#delete-assignment").prop('disabled', false);
                    $("#delete-assignment").removeClass('bg-red-400');
                    $("#delete-assignment").addClass('hover:cursor-pointer hover:shadow-md');

                    window.location.href= JSON.parse(data);
                });
                

            }
        });
    });
</script>

@endsection