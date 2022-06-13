@extends('layouts.eclassroomStudentLayout')
@section('main_content')


@section('bread_crumbs')
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
            {{ session('success')}}
        </div>

    </div>
    @endif

    <div class="bg-white px-5 py-10 shadow-md rounded-md">
        <h2 class="text-center p-15 text-3xl mb-10 text-amber-700 ">Previous Uploads</h2>

        @foreach($uploads as $upload)
        <div class="py-2 my-4 px-5 w-full bg-blue-200 relative flex items-center">
            <p>{{$upload->name}}</p>
            {{-- <p class="">Upload date: {{date('dS F Y',strtotime($upload->created_at))}}</p> --}}
            <div class="absolute right-10 flex gap-x-5">
                <button class="px-2 w-20 bg-green-700 text-white rounded" data-file="{{$upload->id}}">Edit</button>
                <button class="delete-file px-2 w-20 bg-red-700 text-white rounded"
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

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/upload/update',
                    type: 'POST',
                    data: {
                        file: $(this).data('file'),
                        
                    },
                        success: function(response) {
                        location.reload();
                }
                });


        });

    });

</script>
@endsection