@extends('layouts.eclassroomSchoolLayout')
@section('main_content')


<div class="text-center p-15 text-3xl mt-10 text-zinc-500">Search Students</div>
<div class="ml-4 p-7 mt-2 text-sky-900 text-lg">Search Student by Names or Student ID</div>

<div>
<input class="ml-20 p-5" type = "text" name="student" placeholder="Enter Student Name or ID"> <br>

<br><input class= "ml-20 p-2 rounded-lg bg-sky-300 shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left" type = "submit" name="sstudent" value="Search Student"> <br>

<div>
    <br><span class="ml-20 p-5"> OR</span><br>
    <br><input class= "ml-20 p-2 rounded-lg bg-sky-300 shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left" type = "submit" name="allstudent" value="View All Students"><br>
</div>
</div>
<div>
    <table class="mr-20 snap-center border-separate [border-spacing:2.75rem]">
        <tr>
            <th>Names</th>
            <th>Email Address</th>
        </tr>
        <tr>
            <!-- will have a foreach -->
            <td >example example</td>
            <td >example@gmail.com</td>
        </tr>
    </table>
</div>


@endsection