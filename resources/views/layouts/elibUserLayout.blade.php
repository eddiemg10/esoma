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
                <!-- <li class="bg-zinc-100 rounded-full  xmd:w-[50%] w-[80%] hover:shadow-inner shadow-md hover:cursor-pointer transition ease-out pl-4 mb-3 nav"></li> -->
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3"><a href={{url('elib/'.$class->id)}}>{{$class->classlevel_name}}</a></li>
                <!-- <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 1</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 2</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 3</li> -->
              @endif
            </ul>
            @endforeach
           
            <!-- <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Primary School</p>
        <!-- <div class="justify-center mt-10 flex max-h-full w-80 flex-col gap-5">
            <table>
                <thead>
                    <tr>
                        <th class="text-normal p-4 text-2xl text-slate-600 hover:text-blue-400">Kids Learning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="ml-24 text-slate-400">PP1</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">PP2</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Grade 1</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Grade 2</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Grade 3</a></td>
                    </tr>
                </tbody>
            </table>
            <table>
                <thead>
                    <tr>
                        <th class="text-normal p-4 text-2xl text-slate-600 hover:text-blue-400">Primary School</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Grade 4</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Class 5</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Class 6</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Class 7</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Class 8</a></td>
                    </tr>
                </tbody>
            </table>
            <table class>
                <thead>
                    <tr>
                        <th class="text-normal p-4 text-2xl text-slate-600 hover:text-blue-400">Secondary School</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Form 1</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Form 2</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Form 3</a></td>
                    </tr>
                    <tr>
                        <td><a class="ml-24 text-slate-400">Form 4</a></td>
                    </tr>
                </tbody>
            </table>
        </div> -->

        <div class="hidden md:flex flex-col pl-16 w-[20%] mt-20">
            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Kids Learning</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">
                <li class="bg-zinc-100 rounded-full  xmd:w-[50%] w-[80%] hover:shadow-inner shadow-md hover:cursor-pointer transition ease-out pl-4 mb-3 nav">PP1</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">PP2</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 1</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 2</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Grade 3</li>

            </ul>

            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Primary School</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Class 4</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Class 5</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Class 6</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Class 7</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Class 8</li>

            </ul>

            <p class="text-blue-rich font-bold text-xl mb-3 mt-10">Secondary School</p>

            <ul class=" pt-3 leading-7 text-zinc-500 xmd:text-sm text-xs font-light">
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Form 1</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Form 2</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Form 3</li>
                <li class="rounded-full  xmd:w-[50%] hover:shadow-inner w-[80%] hover:cursor-pointer transition ease-out pl-4 nav mb-3">Form 4</li>

            </ul> -->
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