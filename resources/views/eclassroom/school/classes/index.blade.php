@extends('layouts.eclassroomSchoolLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href="#" class="text-blue-rich font-normal"> Manage classes </a>


</span>

@endsection

<div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">

    <div class="bg-white w-[90%] min-h-[70vh] pb-20 text-center shadow-md  rounded-3xl flex flex-col items-center">

        <div class="bg-purple-700 py-4 text-xl font-bold text-white rounded-t-3xl w-full">{{$school->name}}</div>
        <h1 class="text-3xl mt-10 text-zinc-500">Your Classes</h1>

        <button
            class="bg-zinc-700 py-2 px-4 text-lg text-white w-[30%] mt-10 rounded-md hover:cursor-pointer hover:shadow-md shadow-sm"
            data-modal-toggle="add-class-modal" id="add-class">
            Add a new Class
        </button>

        <div class="w-full relative flex justify-center">
            @if(session('success'))
            <div
                class="flash mt-5 text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md absolute w-[40%]">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div
                class="flash mt-5 text-red-500 font-bold border text-sm border-red-500 bg-red-50 text-center py-2 rounded-md absolute w-[40%]">
                {{session('error') }}
            </div>
            @endif

        </div>
        <!-- Main modal -->
        <div id="add-class-modal" tabindex="-1" aria-hidden="true"
            class="hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto right-0 left-10 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-[70%]  h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" id="close-modal"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-toggle="add-class-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-white">Create a New Classroom
                        </h3>
                        <form class="" action="/classroom" id="classroom-form" method="POST">
                            @csrf

                            <input type="hidden" name="school" value={{$school->id}}>
                            <div class="flex mb-5">
                                <label for="className"
                                    class="block mb-2 w-[26%] py-2 text-right mr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Classroom
                                    Name</label>
                                <input type="text" name="className" id="classroom"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Class 8 Math Class" required>
                            </div>
                            <div class="flex mb-5">
                                <label for="description"
                                    class="block mb-2 w-[26%] py-2 align-middle text-right mr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Classroom
                                    Description</label>
                                <input type="text" name="description" id="description"
                                    placeholder="Math Class for Class 8 students 2022"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>
                            </div>

                            <div class="flex">
                                <label for="description"
                                    class="block w-[26%] py-2 align-middle text-right mr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Classroom
                                    Subject</label>
                                <div class="flex w-full gap-x-4 ">
                                    <select name="subject" id="subject"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>

                                        <option value="General" selected>General</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="English">English</option>
                                        <option value="Kiswahili">Kiswahili</option>
                                        <option value="SST">SST</option>
                                        <option value="CRE">CRE</option>
                                        <option value="Science">Science</option>
                                        <option value="History">History</option>
                                        <option value="Geography">Geography</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Biology">Biology</option>
                                        <option value="Chemistry">Biology</option>



                                    </select>

                                    <input type="text" name="custom_subject" id="custom_subject"
                                        placeholder="(Optional)"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                </div>
                            </div>

                            <div class="w-full text-xs flex mb-5">
                                <span class="w-[63%]"></span>
                                <span class="text-center">Enter a custom subject if it does not appear
                                    on the list <br> <span class="text-zinc-400">*This will override the dropdown
                                        selection</span></span>
                            </div>

                            <div class="flex mb-10">
                                <label for="description"
                                    class="block mb-2 w-[26%] py-2 align-middle text-right mr-5 text-sm font-medium text-gray-900 dark:text-gray-300">Classroom
                                    Teacher</label>
                                <select name="teacher" id="teacher"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required>

                                    @foreach($teachers as $teacher)
                                    <option value={{$teacher->id}}>{{$teacher->firstName." ".$teacher->secondName}}
                                    </option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                Classroom</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-[100%] px-5 gap-9 justify-center flex-wrap" id="content">
            @foreach ($classrooms as $classroom)
            <div class="bg-white w-[30%] relative pb-10 basis-[350px] text-center shadow-md hover:shadow-xl hover:cursor-pointer flex flex-col transition rounded-3xl classroom mt-20"
                id={{$classroom->id}}>
                <a href={{url('classroom/school/'.$classroom->id)}}>
                    <div class="{{$classroom->status === 1 ? 'bg-purple-700': 'bg-slate-500'}} py-4 rounded-t-3xl">
                        <h1 class="text-xl text-white">{{$classroom->name}}</h1>
                    </div>

                    <p class="text-sm absolute top-20 right-5"><span class="font-bold">Created</span> {{
                        \Carbon\Carbon::parse($classroom->created_on)->diffForHumans()}}</p>
                    <p
                        class="text-xs absolute top-[107px] right-5 font-bold rounded-full px-3 {{$classroom->status == 1 ? 'bg-green-50 text-green-500' : 'bg-red-50 text-red-400'}}">
                        {{$classroom->status == 1? 'Active' : 'Innactive'}}</p>

                    <div class="mt-20 flex flex-col gap-y-4 items-start ml-5">
                        <p>Teacher: <span
                                class="bg-zinc-100 font-light py-1 px-3 rounded-full mt-20">{{$classroom->firstName."
                                ".$classroom->secondName}}
                            </span></p>
                        <p>Subject: <span
                                class="bg-zinc-100 font-light py-1 px-3 rounded-full">{{$classroom->subject}}</span>
                        </p>
                    </div>

                </a>

            </div>

            @endforeach
        </div>


    </div>
</div>


<script>
    $(document).ready(function(){
        
        // $('#classroom-form').validate();

        $("#add-class").click(function(e){
            $("#add-class-modal").removeClass('hidden');
            $("#add-class-modal").addClass('flex');
            stopScroll();

        });

        $("#close-modal").click(function(e){
            $("#add-class-modal").removeClass('flex');
            $("#add-class-modal").addClass('hidden');
            resumeScroll();

        });


        function stopScroll(){
            // lock scroll position, but retain settings for later
            var scrollPosition = [
            self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
            self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
            ];
            var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
            html.data('scroll-position', scrollPosition);
            html.data('previous-overflow', html.css('overflow'));
            html.css('overflow', 'hidden');
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }

        function resumeScroll(){
            var html = jQuery('html');
            var scrollPosition = html.data('scroll-position');
            html.css('overflow', html.data('previous-overflow'));
            window.scrollTo(scrollPosition[0], scrollPosition[1])
        }

        $(".flash").fadeOut(6000);


      });
</script>
@endsection