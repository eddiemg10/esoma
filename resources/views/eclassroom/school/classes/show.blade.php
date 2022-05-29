@extends('layouts.eclassroomSchoolLayout')
@section('main_content')


@section('bread_crumbs')
<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/school')}} id="home-nav" class="hover:text-blue-900">Manage classes</a> |
    <a href="#" class="text-blue-rich font-normal">{{$classroom->name}}</a>


</span>

@endsection




<div class="flex flex-col w-[full] px-5 gap-y-5 justify-center items-center" id="content">

    <div class="bg-white w-[90%] min-h-[70vh] pb-20 text-center shadow-md  rounded-3xl flex flex-col items-center">

        <div
            class="{{$classroom->status == 1 ? 'bg-purple-700' : 'bg-slate-500'}} py-4 relative text-xl font-bold text-white rounded-t-3xl w-full">
            {{$classroom->name}}
            <div class="flex items-center absolute right-10 top-0 h-full gap-4">
                
            </div>

        </div>
        <h1 class="text-3xl mt-10 text-zinc-500"></h1>

        <div class="relative flex flex-col items-start px-10 w-full">
            <p class="font-light">{{$classroom->description}}</p>
            <p class="absolute right-10 top-0 text-sm text-zinc-500"><span class="font-bold">Created</span> {{
                \Carbon\Carbon::parse($classroom->created_on)->diffForHumans()}}</p>
            <p
                class=" inline-block absolute top-10 right-10 py-1 rounded-full px-4 font-bold text-md {{$classroom->status == 1 ? 'bg-green-100 text-green-500' : 'bg-red-100 text-red-500'}}">
                {{$classroom->status == 1? 'Active' : 'Innactive'}}</p>

            <button id="status" data-classroom={{$classroom->id}}
                class="inline-block absolute top-24 right-10 py-1 rounded-md px-4 font-bold text-white text-md
                {{$classroom->status == 1 ? 'bg-red-700' : 'bg-green-500'}}">

                <div id="activation" class="">{{$classroom->status == 1? 'Deactivate' : 'Activate'}}</div>

                <div id="loading" class="hidden">
                    <x-loading-button width="4" fill="purple-700" />
                    <span class="text-white text-xs">loading...</span>
                </div>
            </button>


            <p class="text-lg mt-12 mb-5">Subject: <span class="bg-zinc-100 font-light py-1 px-3 rounded-full">
                    {{$classroom->subject}} </span></p>
            <p class="text-lg mb-5">Teacher: <span
                    class="bg-zinc-100 font-light py-1 px-3 hover:cursor-pointer hover:bg-purple-50 transition rounded-full">{{$classroom->firstName."
                    ".$classroom->secondName}}</span>
            </p>

        </div>

        <div class="w-[90%] h-[3px] bg-zinc-400 mt-20"></div>

        <div class="w-full flex flex-col items-center">
            <p class="text-lg mt-12 mb-5">Access Code: <span class="bg-slate-100 font-light py-1 px-3 rounded-md">
                    {{$classroom->access_code}} </span></p>

            <div
                class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap gap-4 -mb-px mt-10">
                    <li id="students" data-classroom={{$classroom->id}}
                        class="class-nav inline-block p-4 text-blue-rich rounded-t-lg border-b-2 hover:cursor-pointer
                        border-blue-rich active">
                        Students
                    </li>
                    <li id="uploads" data-classroom={{$classroom->id}}
                        class="class-nav inline-block p-4 rounded-t-lg border-b-2 border-transparent
                        hover:cursor-pointer hover:text-gray-600 hover:border-gray-300"
                        aria-current="page">
                        Uploaded Content
                    </li>
                </ul>

            </div>

            <div class="mt-5 w-[90%] px-5 flex justify-center" id="class-content">
                <div class="w-full flex justify-center" id="students-data">
                    <x-students-table :students="$students" />
                </div>
                <div class="w-full hidden" id="uploads-data">
                    <x-class-uploads :uploads="$uploads" />
                </div>
            </div>
        </div>

    </div>


</div>
</div>

<script>
    $(document).ready(()=>{

    $("#status").click(function(e){

        if (confirm('Are you sure you want to activate/deactivate this class?')) {
            $(this).prop('disabled', true);
            $(this).addClass('opacity-75');
            $(this).removeClass('hover:cursor-pointer');
            $("#activation").hide();
            $("#loading").show();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/classroom',
            type: 'PUT',
            data: {classroom: $(this).data('classroom')},
            success: function(response) {
                location.reload();
            }
        });

        } else {
            return;
        }
    });

    $(".class-nav").click(function(){
        $(this).addClass('text-blue-rich border-blue-rich');
        $(this).removeClass('border-transparent hover:text-gray-600 hover:border-gray-300');

        $(this).siblings().removeClass('text-blue-rich border-blue-rich');
        $(this).siblings().addClass('border-transparent hover:text-gray-600 hover:border-gray-300');

    });

    $("#students").click(function(e){
        $("#students-data").removeClass('hidden');
        $("#uploads-data").addClass('hidden');
        
    });  

    $("#uploads").click(function(e){
        $("#uploads-data").removeClass('hidden');
        $("#students-data").addClass('hidden');
    });
    
    });
</script>
@endsection