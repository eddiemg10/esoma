@extends('layouts.elibUserLayout')
@section('main_content')




@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
     <a href="/elib" id="home-nav" class="hover:text-blue-900">Elib</a> |
     <a href="/elib/" class="hover:text-blue-900">{{$selectedschool->schoollevel_name}}</a> |
    <a href="/elib/" class="hover:text-blue-900">{{$selectedclass->classlevel_name}}</a>
    <a href="#" class="text-blue-rich font-normal"> </a> 

</span>


@endsection

<div class="flex justify-center mb-14">
    <h2 class="text-normal text-5xl text-blue-500">{{$selectedclass->classlevel_name}}</h2>
</div>

<div class="flex flex-wrap w-[100%] gap-10 justify-center">
    @foreach($subjects as $subject)
    @if($selectedclass->id==$subject->class_level_id)
    <div class="h-[200px] w-[300px] rounded-xl bg-white shadow-md md:w-[300px] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md">
            <a href="{{url('elib/'.$selectedclass->id.'/'.$subject->id)}}" class="text-center bg-yellow-500 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">{{$subject->subject_name}}</a>
        </div>

        @foreach($fileuploads as $file)
        @if($subject->id==$file->subject_id)
        <div class="flex mt-2 text-sm font-extralight text-zinc-700">
            <ul class="list-disc list-inside ml-4">
                <li>{{$file->name}}</li>
            </ul>
        </div>
        @endif
        @endforeach

        @if(count($fileuploads) == 0)
        <div class="flex mt-10 bg-sky-100 text-xl w-full justify-center py-2 text-zinc-400 shadow-md transition assignment">
            <p>No files uploaded yet🥺</p>
        </div>
        @endif

    </div>
    @endif
    @endforeach
</div>





@endsection