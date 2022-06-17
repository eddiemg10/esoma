@extends('layouts.master')
@section('layoutContent')

<x-navbar />


<!-- Dashboard -->
<div class="container h-full flex flex-row pt-4 divide-x px-4 font-Roboto">
    <!-- Dashboard Menu -->
    <div class="flex flex-col items-center px-4 w-1/5">
        <div class="container p-4">
            <h1 class="text-center text-xl text-esomablue">Menu</h1>
        </div>
        <div class="container flex flex-col space-y-4 text-sm font-base text-esomablue">
            <div class="mt-4 flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-chart-line text-esomagreen"></i>
                <a href="" class="text-esomagreen hover:text-esomagreen">Dashboard</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-check hover:text-esomagreen"></i>
                <a href="/dashboard/activate" class="hover:text-esomagreen">Activate Account</a>
            </div>

            <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-receipt hover:text-esomagreen"></i>
                <a href="" class="">View Payment History</a>
            </div>

        </div>
    </div>

    <!-- Dashboard Main Content -->

    <div class="container px-4">
        <div class="container p-4">
            <h1 class="text-xl font-semibold text-esomablue">Welcome back, {{Auth::USer()->firstName}}!👋</h1>
        </div>
        <div class="container flex flex-row space-x-4 divide-x mt-20">
            <div class="container flex flex-col text-esomablue px-4">
                <h2 class="text-center text-lg font-medium py-2">Your user details</h2>
                <div class="font-light">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div class="space-y-1 text-sm">
                        <p>Name: <span class="text-base font-medium">{{Auth::User()->firstName."
                                ".Auth::User()->secondName}}</span></p>
                        <a class="hover:cursor-pointer hover:underline transition" id="class-list">Classes:
                            <span class="text-base font-medium">{{count($classrooms)}}</span> </a>
                        <p>Schools: <span class="text-base font-medium">{{count($schools)}}</span></p>
                        <p>Email: <span class="text-base font-medium">{{Auth::USer()->email}}</span></p>
                    </div>
                </div>
            </div>
            <div class="container flex flex-col text-esomablue px-4">
                <h2 class="text-center text-lg font-medium py-2">Your account status</h2>
                <div class="mb-6">
                    <div class="space-y-1 font-light text-sm">
                        <p>Account status: <span class="text-base font-medium">Active</span></p>
                        <p>Plan: <span class="text-base font-medium">{{$subscription->type ?? "None"}}</span></p>
                    </div>
                </div>
                <div class="container flex flex-row justify-center space-x-4 font-bold">
                    <div
                        class="bg-esomalightblue rounded p-2 text-esomawhite text-xs hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue">
                        <a href="/dashboard/activate">Activate Account</a>
                    </div>

                    <div
                        class="bg-esomalightblue rounded p-2 text-esomawhite text-xs hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue">
                        <a href="">View Payment History</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-row justify-evenly font-bold my-32">
            <div
                class="bg-esomablue rounded p-4 text-esomawhite text-sm hover:text-esomablue hover:bg-esomawhite hover:outline hover:outline-esomablue">
                <a href="">Go to E-Classroom</a>
            </div>
            <div
                class="bg-esomablue rounded p-4 text-esomawhite text-sm hover:text-esomablue hover:bg-esomawhite hover:outline hover:outline-esomablue">
                <a href="">Go to E-library</a>
            </div>
        </div>


        <!-- Main modal -->
        <div id="classrooms-modal" tabindex="-1" aria-hidden="true"
            class="hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto right-0 left-10 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Your Classrooms
                        </h3>
                        <button id="close-modal" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="defaultModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 flex flex-col items-center w-full">
                        @foreach($classrooms as $i => $classroom)
                        <a class="bg-sky-600 text-white text-xl w-[80%] py-3 rounded-md pl-5" target="_blank"
                            href={{url("/classroom/student/".$classroom->id)}}>{{($i+1).".
                            ".$classroom->name}}</a>
                        @endforeach
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<x-footer />



<script>
    $(document).ready(()=>{
       

        $("#class-list").click(function(e){
            $("#classrooms-modal").removeClass('hidden');
            $("#classrooms-modal").addClass('flex');
            stopScroll();

        });

        $("#close-modal").click(function(e){
            $("#classrooms-modal").removeClass('flex');
            $("#classrooms-modal").addClass('hidden');
            resumeScroll();

        });


        //Copy pasted from Stack overflow, usishtuke

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


    });
</script>

@stop