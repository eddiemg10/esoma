@extends('layouts.dashboardLayout')

@section('content')
{{-- This is where the code goes --}}

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
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

            </div>
        </div>
    </div>
</div>

<div class="mt-10 p-10">

    <div class="p-5 bg-blue-rich rounded-md w-[50%] text-white">
        <a class="hover:cursor-pointer hover:underline transition" id="class-list">Classes: {{count($classrooms)}}</a>
        Schools: {{count($schools)}}
    </div>

</div>


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
@endsection