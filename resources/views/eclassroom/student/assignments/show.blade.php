@extends('layouts.eclassroomStudentLayout')

{{-- <div class="absolute w-full h-full bg-slate-600 opacity-50 overscroll-contain z-50"></div> --}}

@section('main_content')



@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> |
    <a href={{url('classroom/student/'.$pageID)}} class=" hover:text-blue-900"> {{$page}} </a> |
    <a href={{url('classroom/student/'.$pageID.'/assignments')}} class="hover:text-blue-900"> Assignments </a> |
    <a href="#" class="text-blue-rich font-normal">{{$assignment->title}}</a>

</span>

@endsection

<div class="flex flex-col w-full px-5 gap-y-5 justify-center items-center" id="content">


    <div class="bg-white w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col">

        <div class="bg-green-500 py-4 text-xl font-bold text-white rounded-t-3xl">{{$page}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">{{$assignment->title}}</h1>
        <p class="text-sm text-slate-400 font-light mt-2">(Click on the right answer)</p>

        <div class="flex flex-col gap-y-5 mt-10 px-10 w-[100%]" id="quiz-content">
            <form action="" class="w-full flex flex-col items-start">
                @foreach ($quiz as $i =>$que)
                <p class="pl-5 text-lg bg-zinc-100 rounded-xl w-full text-left py-5"><span
                        class="font-black text-xl">{{($i+1).". "}}</span>{{$que['question']}}</p>

                <div class="mb-10 py-5 w-[100%]">

                    <?php $alphabet = range('A', 'Z'); ?>

                    @foreach($que['choices'] as $i=>$choice)
                    {{-- rawurlencode() lets us escape spaces in the string... decodeURIComponent() will decode it in JS
                    --}}
                    <p class="choice bg-sky-100 hover:cursor-default hover:bg-sky-200 transition py-4 my-3 text-left pl-10"
                        data-question={{$que['id']}} data-choice={{rawurlencode($choice)}}> <span
                            class="font-black pr-2">{{$alphabet[$i].". "}}</span>{{$choice}}</p>
                    @endforeach
                </div>

                @endforeach


                @if(count($quiz) == 0)
                <div class="bg-sky-100 text-xl w-full py-4 text-zinc-400 shadow-md transition assignment">
                    This quiz has no questions
                    <button id="submit" class="bg-green-200 py-2 px-8 mt-10 rounded-md shadow-md text-zinc-700">Mark as
                        done</button>
                </div>
                @else
                <div class="w-full flex flex-col items-center justify-center">
                    <div id="loading" class="hidden">
                        <x-loading-button />
                        <span class="text-zinc-500 text-sm">loading...</span>
                    </div>
                    <button id="submit" class="bg-green-500 w-[20%] py-2 px-8 mt-10 rounded-md shadow-md text-white"
                        data-classroom={{$pageID}}>Submit</button>
                </div>
                @endif
            </form>


        </div>
    </div>


</div>
</div>

<script>
    $(document).ready(function(){
            let answers = [{assignment : <?= $assignment->id ?>}];


            //Assignming random strings to all question answers initially
            var quiz = <?= json_encode($quiz)?>;
            
            for(let i=0; i< quiz.length; i++){
                let defaultResponse = {
                                question : quiz[i].id, 
                                choice: "@#4%^>/*)-=+"
                                }

                answers.push(defaultResponse);
            }


            

            function containsObject(obj, list) {
                var i;
                for (i = 0; i < list.length; i++) {

                    if (list[i].question === obj.question) {
                        return true;
                    }
                }

                return false;
            }

            $(".choice").click(function(){

                $(this).addClass('bg-sky-300');
                $(this).siblings().removeClass('bg-sky-300');

                
                let response = {
                                question : JSON.parse(this.dataset.question), 
                                choice: decodeURIComponent(this.dataset.choice)
                                }
                
                if(containsObject(response, answers)){
                    for (i = 0; i < answers.length; i++) {
                        if (answers[i].question === response.question) {
                            answers[i] = response;
                        }
                    }
                }
                else{
                    answers.push(response);
                }

            });

            $("#submit").click(function(e){
                e.preventDefault();
                const classroom = this.dataset.classroom;
                $(this).prop('disabled', true);
                $("#submit").addClass('bg-green-200');
                $("#loading").show();
                $.post("/assignments/submit", 
                {
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    data: JSON.stringify(answers),
                    // TODO retrieve userID from session
                    user: 1,
                },

                function(data, status){
                    $(this).prop('disabled', false);

                    if(status==='success'){
                        $.get('/submitnotification/'+classroom+'/'+data, function(data, status){
                            $("#loading").hide();
                            $("#submit").removeClass('bg-green-200');
                            $('#quiz-content').html(data);

                    });

                    }
                }
                )
            })

        });
</script>

@endsection