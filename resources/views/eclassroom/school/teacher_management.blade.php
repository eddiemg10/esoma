@extends('layouts.eclassroomSchoolLayout')
@section('main_content')

@if (session('success'))
<div class="flex justify-center">
    <div
        class="w-[25%] mt-[-30px] flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md absolute">
        {{ session('success')}}
    </div>

</div>
@endif


<div class="text-center p-15 text-3xl mt-10 text-amber-700 mb-10">Teacher Management</div>
<form action="{{route('add-teacher')}}" method="POST" class="w-full flex justify-center mb-5">
@csrf

    <input
        class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline0"
        type="text" name="tsc" placeholder="Enter TSC number"> <br>
    <input class="p-5 ml-4 mt-10" type="hidden" name="user_type" value="teacher"> <br>

    <input
        class="ml-3 py-2 px-5 rounded-md bg-sky-600 text-white shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left"
        type="submit" name="addteacher" value="Add Teacher">




</form>
    @if ($errors->any())
<div class="flex justify-center mb-5">
    <div
        class="w-[25%] flash text-red-500 font-bold border text-sm border-red-500 bg-red-50 text-center py-2 rounded-md">
        {{$errors->first()}}
    </div>

</div>
@endif
  


<div class="w-full flex justify-center">
    <table class="table-auto rounded-md">
        <thead class="text-white bg-gray-700">
            <tr>
                <th class="px-6 py-3">First Name</th>
                <th class="px-6 py-3">Last Name</th>
                <th class="px-6 py-3">Email Address</th>
                <th class="px-6 py-3">TSC Number</th>
                <th colspan="2" class="px-6 py-3">Action</th>

            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-6 py-4">{{$user->firstName}}</td>
                <td class="px-6 py-4"> {{$user->secondName}}</td>
                <td class="px-6 py-4">{{$user->email}}</td>
                <td class="px-6 py-4">{{$user->tsc_number??'n/a'}}</td>
                <td class="px-6 py-4 text-center"> <button class="block-teacher {{$user->blocked ? " bg-teal-600"
                        : "bg-cyan-800" }} text-white py-1 px-4 rounded-md"
                        data-teacher={{$user->teacher}}>{{$user->blocked ? "Unblock": "Block"}}</button> </td>
                <td class="px-6 py-4 "> <button class="delete-teacher bg-red-800 text-white py-1 px-4 rounded-md"
                        data-teacher={{$user->teacher}}>Delete</button> </td>

            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){

        $(".block-teacher").click(function(e){
            if (confirm('Are you sure you want to block this teacher?')) {
                
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/teacher/block',
                    type: 'POST',
                    data: {teacher: $(this).data('teacher')},
                success: function(response) {

                    location.reload();
                }
            });
            }
        })

        $(".delete-teacher").click(function(e){
            if (confirm('Are you sure you want to permanently delete this teacher from your school')) {

                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: '/teacher/delete',
                    type: 'POST',
                    data: {teacher: $(this).data('teacher')},
                success: function(response) {

                    location.reload();
                }
            });


            }
        })
    });
</script>
@endsection