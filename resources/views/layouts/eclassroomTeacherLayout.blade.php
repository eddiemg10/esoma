@extends('layouts.userLayout')
@section('content')


<style>
    .active {
        @apply bg-yellow-600;
    }
</style>


<div class="flex flex-col  pb-[600px] font-roboto">
    <div class="font-light flex items-end py-3 mt-7">
        <span class="w-[25%]"></span>
        {{-- Bread crumb navigation goes here --}}
        @yield('bread_crumbs')
    </div>

    <div class="flex w-full justify-center">
        <div class="md:w-[20%] md:flex flex-col pl-16 hidden">
            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Teacher Account</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">
                <li class="bg-zinc-100 rounded-full  py-1 w-[80%] hover:shadow-inner shadow-md hover:cursor-pointer transition ease-out pl-4 mb-6 nav"
                    id="classroom">
                    My Classes</li>
                <li class=" rounded-full  w-[80%] py-1  hover:shadow-inner hover:cursor-pointer transition ease-out pl-4 nav"
                    id="help">
                    Help</li>
            </ul>
        </div>
        <div class="md:w-[80%] w-[90%] flex md:justify-start justify-center">
            <div class="bg-zinc-100 w-[90%] pb-10 rounded-xl shadow-md">
                <h1 class="text-blue-rich font-bold text-4xl text-center mt-10 mb-10">Your Classes</h1>
                <div id="content">
                    @yield('main_content')

                </div>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(()=>{

    $(".nav").click((e)=>{
        $(e.target).addClass('bg-zinc-100 shadow-md');
        $(e.target).siblings().removeClass('bg-zinc-100 shadow-md');
    });

    $("#home-nav").click(function(){
        if(!confirm("WARNING! This action will take you back to the home page. Confirm to continue")){
            return false;
        }
    })

    // $("#classroom").click(function(e)){

    // }

    // $("#help").click(function(e)){

    // }
    
});


</script>

@endsection