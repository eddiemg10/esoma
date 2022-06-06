@extends('layouts.eclassroomSchoolLayout')
@section('main_content')


<div class="text-center p-15 text-3xl mt-10 text-amber-700">Teacher Management</div>
<div>
    <input class="p-5 ml-4 mt-10" type="text" name="teacher" placeholder="Enter First & Last Name"> <br>
    <input class="p-5 ml-4 mt-10" type="text" name="email" placeholder="Enter Email Address"> <br>
    <input class="p-5 ml-4 mt-10" type="text" name="tsc" placeholder="Enter TSC number"> <br>
    <input class="p-5 ml-4 mt-10" type="hidden" name="user_type" value="teacher"> <br>

    <br><input
        class=" ml-10 p-2 rounded-lg bg-orange-500 shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left"
        type="submit" name="addteacher" value="Add Teacher"> <br>

</div>
<div>
    <table class="snap-center border-separate [border-spacing:2.75rem]">
        <thead>
            <tr>
                <th>Names</th>
                <th>Email Address</th>
                <th>TSC Number</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{$user->firstName}} {{$user->secondName}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tsc_number??'n/a'}}</td>
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>


@endsection