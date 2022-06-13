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

    <div class="flex w-full justify-center gap-4">
        <div class="md:w-[20%] md:flex flex-col pl-16 hidden">
            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">School Institution Account</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-sm font-light">
                <li class="rounded-full py-1 w-[80%] hover:shadow-inner  hover:cursor-pointer transition ease-out pl-4 mb-6 nav {{$tab==='classes'
                ? " bg-zinc-100 shadow-md" : "" }}" data-url="/classroom/school" id="classroom">
                    Manage Classes
                </li>
                <li class=" rounded-full py-1  w-[80%] hover:shadow-inner hover:cursor-pointer transition ease-out pl-4 nav mb-6 {{$tab==='teachers'
                ? " bg-zinc-100 shadow-md" : "" }}" data-url="/classroom/school/teachers" id="help">
                    Manage Teachers</li>
                <li class=" rounded-full py-1  w-[80%] hover:shadow-inner hover:cursor-pointer transition ease-out pl-4 nav {{$tab==='students'
                ? " bg-zinc-100 shadow-md" : "" }}" data-url="/classroom/school/students" id="help">
                    Manage Students</li>
            </ul>
        </div>
        <div class="md:w-[80%] w-[90%] flex md:justify-start justify-center">
            <div class="bg-zinc-100 w-[90%] pb-10 rounded-xl shadow-md">
                <h1 class="text-blue-rich font-bold text-4xl text-center mt-10 mb-20">Registered Classes</h1>
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
        // $(e.target).addClass('bg-zinc-100 shadow-md');
        // $(e.target).siblings().removeClass('bg-zinc-100 shadow-md');
        
        let destination = ({!!json_encode(url('/'))!!}+$(e.target).data('url'));
        window.location.href = destination;
        
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