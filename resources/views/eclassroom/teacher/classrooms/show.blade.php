@extends('layouts.master')
@section('layoutContent')

<h1 class="text-4xl text-bold">Add Assignment</h1>

<div class="flex justify-center w-[100%] font-roboto">
    <form id="quiz-form" class="w-[90%] flex flex-col items-center mt-10 gap-y-10" action="/assignments" method="POST">
        @csrf

        <div class="w-[full] flex justify-center mb-5">
            <button id="submit-quiz" class="bg-blue-rich px-20 py-3 rounded-full text-white text-xl font-bold">Submit Assignment<button>
        </div>
        <div class="w-[100%] flex flex-col items-center justify-center mb-5">
            <input class="border shadow-sm  pl-5 py-2 w-[90%] rounded mt-3" name="assignment-title" type=text placeholder="Enter assignment title" required>
        </div>
        <span id="form-content" class="w-full flex flex-col items-center gap-y-10">
            <x-question-form />
        </span>

        <div class="w-[full] flex justify-center mb-5">
            <div id="add-question" class="bg-green-500 px-10 py-2 rounded-full hover:cursor-pointer hover:shadow-lg transition text-white text-xl font-bold shadow-md">Add Question<div>
        </div>


    </form>
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

            });
            
        });

        
        
    })
</script>


@endsection