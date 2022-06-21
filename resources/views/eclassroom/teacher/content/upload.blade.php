@extends('layouts.eclassroomTeacherLayout')
@section('main_content')


@section('bread_crumbs')

<span class="text-slate-400 hover:cursor-pointer">
    <a href={{url('/')}} id="home-nav" class="hover:text-blue-900">Esoma</a> |
    <a href={{url('/classroom/teacher')}} id="home-nav" class="hover:text-blue-900">Schools</a> |
    <a href={{url('/classroom/teacher/school/'.$school->id)}}
        class="hover:text-blue-900">{{$school->name}}</a> |
    <a href={{url('/classroom/teacher/'. $classroom->id)}} class="hover:text-blue-900"> {{$classroom->name}} |</a>
    <a href="#" class="text-blue-rich font-normal"> Uploads </a>

</span>
@endsection

@if (session('success'))
<div class="flex justify-center">
    <div
        class="w-[25%] mt-[-50px] flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md absolute">
        {{ session('success')}}
    </div>

</div>
@endif


<form method="POST" action="/upload" enctype="multipart/form-data" class="px-10">
    @csrf

    <div class="w-full flex flex-col items-center mt-10 bg-white rounded-lg shadow-md py-20">
        <h2 class="text-center p-15 text-3xl mb-10 text-amber-700 ">Upload Class content</h2>

        <input
            class="shadow appearance-none border rounded w-[80%] py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="name" placeholder="Enter title" autocomplete="off" required>

        <input
            class="mt-5 text-sm text-gray-900 bg-white rounded-md border border-gray-300 cursor-pointer file:p-2 w-[80%] focus:outline-none"
            type="file" name="doc" required>
        <input class="w-[50%] text-white bg-zinc-700 py-2 mt-8 rounded-md hover:bg-zinc-800 hover:cursor-pointer"
            type="submit" name="Upload" id="upload">
        <input type="hidden" value="{{$classID}}" name="classroom_id">
    </div>

</form>

<div class="mt-20 w-full px-10">

    @if (session('success2'))
    <div class="flex justify-center">
        <div
            class="w-[25%] mt-[-60px] flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md absolute">
            {{ session('success2')}}
        </div>

    </div>
    @endif

    <div class="bg-white px-5 py-10 shadow-md rounded-md">
        <h2 class="text-center p-15 text-3xl mb-10 text-amber-700 ">Previous Uploads</h2>

        @foreach($uploads as $i => $upload)

        {{-- Modal Edit Form --}}
        <div tabindex="-1" aria-hidden="true"
            class="hidden edit-class-modal  bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="flex justify-center items-center w-full h-full">
                <div class="relative p-4 w-[70%]  h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="upload-modal-close absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="add-class-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit Uploaded document
                            </h3>
                            <form class="" action="/upload/update" id="classroom-form" method="POST">
                                @csrf
                                <input type="text" name="name" value="{{$upload->name}}"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                    required>

                                <input type="hidden" name="file" value='{{$upload->id}}'>


                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                    Document Name</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 my-4 px-5 w-full bg-blue-200 relative flex items-center">
            <p>{{($i+1)."."}}<span class="pl-5">{{$upload->name}}</span></p>
            {{-- <p class="">Upload date: {{date('dS F Y',strtotime($upload->created_at))}}</p> --}}
            <div class="absolute right-10 flex gap-x-5">
                <button class="update-file px-2 py-1 w-20 bg-cyan-800 text-white rounded"
                    data-file="{{$upload->id}}">Edit</button>
                <button class="delete-file px-2 py-1 w-20 bg-red-800 text-white rounded"
                    data-file="{{$upload->id}}">Delete</button>
            </div>

        </div>
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function(){

        $(".delete-file").click(function(e){
            if (confirm('Are you sure you want to permanently delete this file from the classroom')) {

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/upload/delete',
                    type: 'POST',
                    data: {file: $(this).data('file')},
                        success: function(response) {
                        location.reload();
                }
                });


            }
        });

        $(".update-file").click(function(e){

            let modal = $(this).parent().parent().prev();

            modal.removeClass('hidden');
            modal.addClass('flex');

            $(".upload-modal-close").click(function(e) {

                modal.removeClass('flex');
                modal.addClass('hidden');

            });


        });

    });

</script>
@endsection