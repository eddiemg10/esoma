@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer"> 
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> | 
    <a href={{url('classroom/student')}} class="hover:text-blue-900">Classrooms</a> | 
    <a href={{url('classroom/student/'.$pageID)}} class=" hover:text-blue-900"> {{$page}} </a> |
    <a href={{url('classroom/student/'.$pageID.'/assignments')}} class="hover:text-blue-900"> Assignments </a>  |
    <a href="#" class="text-blue-rich font-normal">{{$assignment}}</a>

</span>

    @endsection

    <div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">
        
        <div class="bg-white w-[80%] min-h-[70vh] pb-10 text-center shadow-md  rounded-3xl flex flex-col">

            <div class="bg-green-500 py-4 text-xl font-bold text-white rounded-t-3xl">{{$page}}</div>
            <h1 class="text-3xl mt-10 text-zinc-500">Title of a Quiz</h1>
            <p class="text-sm text-slate-400 font-light mt-2">(Click on the right answer)</p>

            <div class="flex flex-col gap-y-5 px-5 mt-10">
                <form action="">
                    @foreach ($quiz as $que)
                        <p>{{$que['question']}}</p>

                        <div class="bg-slate-300 mt-10 py-5">
                            @foreach($que['choices'] as $choice)
                                {{-- rawurlencode() lets us escape spaces in the string... decodeURIComponent() will decode it in JS --}}
                                <p class="choice bg-red-300 my-5" data-question={{$que['id']}} data-choice={{rawurlencode($choice)}}>{{$choice}}</p>
                            @endforeach
                        </div>

                    @endforeach
                    

                    @if(count($quiz) == 0)
                    <div class="bg-sky-100 text-xl w-full py-4 text-zinc-400 shadow-md transition assignment">
                    This quiz has no questions
                    
                    </div>
                    @else
                    <button class="bg-green-500 py-2 px-8 mt-10 rounded-md shadow-md text-white">Submit</button>

                    @endif
                </form>

                
            </div>
        </div>


        </div>
    </div>

    <script>
        $(document).ready(function(){
            let answers = [];

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

                let response = {
                                question : this.dataset.question, 
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
                


            console.log(answers)

            });

        });
    </script>

@endsection
