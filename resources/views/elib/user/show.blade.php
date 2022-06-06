@extends('layouts.elibUserLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href="{{url('/elib')}}" id="home-nav" class="hover:text-blue-900">Elib</a> |
    <a href={{url('/elib')}} class="hover:text-blue-900">Kids Learning</a> |
    <a href={{url('/elib')}}  class=" hover:text-blue-900">PP1</a> |
    <a href={{url('elibrary/pp1/1')}} class="text-blue-rich font-normal">Mathematics </a>

</span>

@endsection
<div class="flex justify-center">
    <h2 class="text-normal text-5xl text-blue-500 font-bold">{{$class->classlevel_name}}</h2>
</div>
@endforeach
@endforeach

<div class="flex flex-wrap justify-center gap-6 mt-10">
    <div class="w-[95%] bg-white flex-row rounded-3xl  shadow-md md:w-[90%] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center rounded-tr-md rounded-tl-md">

            <a href={{url('classroom/student')}} class="text-center bg-blue-rich text-white w-[100%] py-5 rounded-t-3xl shadow-md text-2xl ">{{$sub->subject_name}}</a>
        </div>
       
        <div class="flex flex-col gap-4 h-[800px]">
            <div class="flex justify-center mt-14 text-4xl mb-2 font-bold text-zinc-600">
                <h2>Study Notes</h2>
            </div>
            @foreach($fileuploads as $key=>$file)
            <div class="flex w-[90%] p-4 bg-blue-200 ml-14 text-xl">
                <p>{{$key+1}}.</p>
                <p class="w-[90%] ml-4">{{$file->name}}</p>

            </div>
            @endforeach

            @if(count($fileuploads) == 0)
            <div class="flex bg-sky-100 text-xl w-full justify-center py-4 text-zinc-400 shadow-md transition assignment">
              <p>No file uploads available😭</p>

            </div>
            @endif
            <div class="flex justify-center mt-14 text-4xl mb-2 font-bold text-zinc-600">
                <h2>Revision Questions and Answers</h2>
            </div>
            @foreach($fileuploads as $key=>$file)
            <div class="flex  w-[90%] p-4 bg-green-200 ml-14 text-xl">
                <p>{{$key+1}}.</p>
                <p class="w-[90%] ml-4">{{$file->name}}</p>

            </div>
            @endforeach

            @if(count($fileuploads) == 0)
            <div class="flex bg-sky-100 text-xl w-full justify-center py-4 text-zinc-400 shadow-md transition assignment">
              <p>No file uploads available😭</p>

            </div>
            @endif
    <h2 class="text-normal text-5xl text-blue-500 font-bold">PP1</h2>
</div>

<div class="flex flex-wrap justify-center gap-6 mt-10">
    <div class="w-[95%] bg-white flex-row rounded-xl  shadow-md md:w-[90%] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center rounded-tr-md rounded-tl-md">
            <a href={{url('classroom/student')}} class="text-center bg-blue-400 text-white w-[100%] py-10 rounded-tr-md rounded-tl-md shadow-md text-5xl ">Mathematics</a>
        </div>
        <div class="flex flex-col gap-4 h-[800px]">
            <div class="flex justify-center mt-14 text-4xl font-bold">
                <h2>Study Notes</h2>
            </div>
            <div class="flex text-center w-[90%] p-4 bg-blue-300 ml-14 text-2xl">
                1. Learn Numbers up to 5    ⬇️
            </div>
            <div class="flex text-center w-[90%] p-4 bg-blue-300 ml-14 text-2xl">
                2. Learn Numbers up to 10    ⬇️
            </div>
            <div class="flex text-center w-[90%] p-4 bg-blue-300 ml-14 text-2xl">
                3. Learn Numbers up to 15    ⬇️
            </div>
            <div class="flex text-center w-[90%] p-4 bg-blue-300 ml-14 text-2xl">
                4. Count up to 5    ⬇️
            </div>
            <div class="flex text-center w-[90%] p-4 bg-blue-300 ml-14 text-2xl">
                5. Count up to 10    ⬇️
            </div>
            <div class="flex justify-center mt-14 text-4xl font-bold">
                <h2>Revision Questions and Answers</h2>
            </div>
            <div class="flex text-center w-[90%] p-4 bg-green-300 ml-14 text-2xl">
                1. Counting numbers    ⬇️
            </div>
        </div>
    </div>
</div>



@endsection