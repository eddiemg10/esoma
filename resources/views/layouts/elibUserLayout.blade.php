@extends('layouts.userLayout')


@section('content')

<div class="container min-h-screen min-w-full bg-white font-roboto">

    <div class="flex-row flex">


        <div class="hidden md:flex flex-col pl-16 w-[20%] mt-20">
            @foreach ($schools as $school)
            <p class="text-blue-rich font-bold text-xl mb-3 mt-10"><a href='#'>{{$school->schoollevel_name}}</a></p>
            @foreach($classes as $class)
            @if($school->id===$class->school_level_id)
            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">            
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3"><a href={{url('elib/'.$class->id)}}>{{$class->classlevel_name}}</a></li>
               
              @endif
            </ul>
            @endforeach
    
            @endforeach
            </ul>
        </div> 

        <div class="flex flex-col mt-10 items-center w-[80%]">
            <div class="font-light flex items-end pl-5 w-[90%] py-3 mt-7">
                {{-- Bread crumb navigation goes here --}}
                @yield('bread_crumbs')
            </div>

            <div class="justify-center max-h-full  flex flex-col w-[90%]  py-20 bg-slate-100">
                @yield('main_content')
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {

        $(".nav").click((e) => {
            $(e.target).addClass('bg-zinc-100 shadow-md');
            $(e.target).siblings().removeClass('bg-zinc-100 shadow-md');
        });

        $("#home-nav").click(function() {
            if (!confirm("WARNING! This action will take you back to the home page. Confirm to continue")) {
                return false;
            }
        })

    });
</script>

@endsection