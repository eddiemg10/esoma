@extends('layouts.elibUserLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer"> 
    <a href="/elib" id="home-nav" class="hover:text-blue-900">Elib</a> | 
    <a href="" class="hover:text-blue-900">Kids Learning</a> | 
    <a href="" class=" hover:text-blue-900"></a> 
    <a href={{url('elibrary/pp1/1')}} class="text-blue-rich font-normal"> </a> 

</span>

    @endsection
<div class="flex justify-center">
    <h2 class="text-normal text-5xl text-blue-500">PP1</h2>
</div>

<div class="flex flex-wrap justify-center gap-6 mt-10">
    <div class="ml- h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md ">
            <a href={{url('elibrary/pp1/1')}} class="text-center bg-yellow-500 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">Mathematics</a>
        </div>
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>Learn numbers up to 5</li>
                <li>Learn numbers up to 10</li>
                <li>Learn numbers up to 20</li>
                <li>Count numbers up to 5</li>
            </ul>
        </div>
    </div>
    <div class="ml- h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md ">
            <a href={{url('elibrary/pp1/1')}} class="text-center bg-blue-rich text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md ">English</a>
        </div>
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>Reading and Listening</li>
                <li>Is, Am and Are</li>
                <li>Matched Pictures and Words</li>
                <li>Writing small letters</li>
            </ul>
        </div>
    </div>
    <div class="ml- h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md ">
            <a href={{url('elibrary/pp1/1')}} class="text-center bg-green-400 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md ">Enviromental Activities</a>
        </div>
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>Physical Environment</li>
            </ul>
        </div>
    </div>
    <div class="ml- h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href={{url('elibrary/pp1/1')}} class="text-center bg-pink-600 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md ">CRE</a>
        </div>
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>CRE Questions</li>
                
            </ul>
        </div>
    </div>
    <div class="ml- h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md ">
            <a href={{url('elibrary/pp1/1')}} class="text-center bg-purple-700 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md ">Story Time</a>
        </div>
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>The boy who cried wolf</li>
                <li>The Rabbit & the turtle</li>
                <li>The 3 Little pigs</li>
                <li>The Thirsty Crow</li>
            </ul>
        </div>
    </div>
</div>




@endsection