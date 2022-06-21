@extends('layouts.elibUserLayout')
@section('main_content')

@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">

    <a href="/elib" id="home-nav" class="hover:text-blue-900">Elib</a> |
    <a href="" class="hover:text-blue-900">{{$selectedschool->schoollevel_name}}</a> |
    <a href="" class="hover:text-blue-900">{{$selectedclass->classlevel_name}}</a> |
    <a href="#" class="text-blue-rich font-normal">{{$subject->subject_name}}</a>


</span>


@endsection


<div class="flex justify-center">
    <h2 class="text-normal text-5xl text-blue-500 font-bold">{{$selectedclass->classlevel_name}}</h2>
</div>

<div class="flex flex-wrap justify-center gap-6 mt-10 pb-40 ">
    <div
        class="w-[95%] bg-white flex-row rounded-3xl pb-20 shadow-md md:w-[90%] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center rounded-tr-md rounded-tl-md">
            <p class="text-center bg-blue-rich text-white w-[100%] py-5 rounded-t-3xl shadow-md text-2xl ">
                {{$subject->subject_name}}</p>
        </div>

        <div class="flex flex-col items-center">
            <div class="flex justify-center mt-14 text-4xl mb-2 font-bold text-zinc-600">
                <h2>Study Notes</h2>
            </div>
            <div class="flex flex-col gap-y-6 w-[80%] m-12">
                @foreach($fileuploads as $key=>$file)
                <a href={{$file->premium ? url('/premium/'.$file->id) : asset("assets/".$file->doc)}} target="_blank"
                    class="flex
                    p-4 bg-blue-200 ml-14 text-xl">
                    <p>{{$key+1}}.</p>
                    <p class="w-[70%] ml-4">{{$file->name}}</p>
                </a>
                @endforeach
            </div>

            @if(count($fileuploads) == 0)
            <div
                class="flex bg-sky-100 text-xl w-[90%] justify-center py-4 text-zinc-400 shadow-md transition assignment">
                <p>No file uploads available😭</p>
            </div>
            @endif

        </div>
    </div>
</div>


@endsection