@extends('layouts.elibUserLayout')
@section('main_content')


@foreach ($classtitle as $class)
@foreach($schooltitle as $school)
@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href="/elib" id="home-nav" class="hover:text-blue-900">Elib</a> |
    <a href="#" class="hover:text-blue-900">{{$school->schoollevel_name}}</a> |
    @endforeach
    <a href="#" class="hover:text-blue-900">{{$class->classlevel_name}}</a>
    <a href="#" class="text-blue-rich font-normal"> </a>

</span>

@endsection



<div class="flex justify-center mb-14">
    <h2 class="text-normal text-5xl text-blue-500">{{$class->classlevel_name}}</h2>
</div>

@endforeach

@foreach($classes as $class)
@foreach($subjects as $key=>$subject)
@if($class->id===$subject->class_level_id)
<div class="flex flex-wrap gap-6 justify-center">
    <div class=" h-[200px] w-[500px] flex-row rounded-xl bg-white shadow-md md:w-[20vw] transition ease-in-out hover:shadow-lg hover:">
        <div class="w-100 flex justify-center items-center h-16 rounded-tr-md rounded-tl-md ">

            <a href={{url('elib/'.$class->id.'/'.$subject->id)}} class="text-center bg-yellow-500 text-white w-[100%] py-5 rounded-tr-md rounded-tl-md shadow-md">{{$subject->subject_name}}</a>
        </div>
        @foreach($fileuploads as $file)
        <div class="flex mt-5">
            <ul class="list-disc list-inside ml-4">
                <li>{{$file->name}}</li>
            </ul>
        </div>
        @endforeach
        @if(count($fileuploads) == 0)
        <div class="flex mt-10 bg-sky-100 text-xl w-full justify-center py-2 text-zinc-400 shadow-md transition assignment">
            <p>No files uploaded yet🥺</p>

        </div>
        @endif

    </div>


    @endif
    @endforeach
    @endforeach

    @if(count($subjects) == 0)
    <div class="flex justify-center mb-14">
        <h2 class="text-normal text-5xl text-blue-500">E-LIB</h2>
    </div>
    @endif
</div>




@endsection