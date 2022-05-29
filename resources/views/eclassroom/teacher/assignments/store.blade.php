@extends('layouts.eclassroomTeacherLayout')
@section('main_content')



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href={{url('/classroom/teacher/school/'.$school->id)}}
        class="hover:text-blue-900">{{$school->name}}</a> |
    <a href={{url('/classroom/teacher/'. $classroom->id)}} class="hover:text-blue-900"> {{$classroom->name}} |</a>
    <a href={{url('/classroom/teacher/'. $classroom->id.'/assignments')}} class="hover:text-blue-900"> Assignments |
    </a>
    <a href="#" class="text-blue-rich font-normal">Create Assignment for {{$classroom->name}} </a>


</span>

@endsection

<div class="w-full flex flex-col items-center">
    <h1 class="text-2xl text-zinc-500 text-bold">Add Assignment</h1>

    <div class="flex justify-center w-[100%] font-roboto ">
        <form id="quiz-form" class="w-[90%] flex flex-col items-center mt-10 gap-y-10 bg-white py-10"
            action="/assignments" method="POST">
            @csrf

            <input type="hidden" name="classroom" value={{$classroom->id}}>

            <div class="w-[100%] flex flex-col items-center justify-center mb-5">
                <label class="text-zinc-600 font-bold pl-2 w-[90%] float-left" for="">Assignment Title</label>
                <input class="border shadow-sm  pl-5 py-2 w-[90%] rounded mt-3" name="assignment-title" type=text
                    placeholder="Enter assignment title" required autocomplete="off">
            </div>
            <span id="form-content" class="w-full flex flex-col items-center gap-y-10">
                <x-question-form />
            </span>

            <div class="w-full flex justify-center mb-5">
                <div id="add-question"
                    class="bg-green-500 px-10 py-2 rounded-full hover:cursor-pointer hover:shadow-lg transition text-white text-xl font-bold shadow-md">
                    Add Question
                </div>
            </div>

            <div class="w-[90%] h-[3px] bg-zinc-400 mt-10  mb-10"></div>

            <div class="w-[full] flex justify-center mb-5">
                <button id="submit-quiz"
                    class="bg-blue-rich px-20 py-3 rounded-full text-white text-xl font-bold">Submit
                    Assignment
                </button>
            </div>

        </form>
    </div>

</div>

<script>
    $(document).ready(function(){
        
        $('#quiz-form').validate();
        let questions = 1;

        function uniqId() {
            return Math.round(new Date().getTime() + (Math.random() * 100));
        }


        function addChoice(){
            $(".add-choice").click(function (e){
                let container = $(this).prev('.choices');

                $.get('/choiceinput/'+questions, function(data, status){
                    container.append(data);

                    $(".remove").click(function (e){
                        $(this).parent()[0].remove();
                    });
                });
        
        });
        }
        
        addChoice();

        $("#add-question").click(function (e){
            questions++;
            $.get('/assignmentform/'+questions, function(data, status){
                $("#form-content").append(data);
                addChoice();

                $(".removeQuestion").click(function (e){
                        $(this).parent()[0].remove();
                    });

            });
            
        });

        
        
    })
</script>


@endsection