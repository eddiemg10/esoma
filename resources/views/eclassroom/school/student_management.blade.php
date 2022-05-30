@extends('layouts.eclassroomSchoolLayout')
@section('main_content')

<div class="text-center p-7 mt-2 text-sky-900 text-lg">All Students</div>

<div>
<input class="ml-20 p-5" type ="text" id="search-posts" name="student" placeholder="Search by Name or Email"><input class= "text-slate-50 ml-1 p-2 rounded-lg bg-gray-800 shadow-md hover:bg-gray-600 cursor-pointer transition assignment text-left" type = "submit" name="sstudent" value="Search Student"> <br>

</div>
<div>
    <table class="ml-20 mt-8 shadow-2xl border-2 border-gray-200 w-96" id="students">
        <thead class="bg-gray-800 text-slate-50">
        <tr>
            <th>Names</th>
            <th>Email Address</th>

        </tr>
        </thead>
        <tbody id="dynamic">
            @include('eclassroom.school.classes.student-search')
        </tbody>
    </table>

</div>
<script type="text/javascript">
$('body').on('keyup','#search-posts',function(){
    var searchQuest = $(this).val();
    $.ajax({
        method: 'POST',
        url: '{{ route("students-search") }}',
        data: {
            ' _token':'{{ csrf_token() }}',
            searchQuest: searchQuest,
        },
        success: function(res) {
            console.log(res);
            $('#students tbody').html(res)
}})
});
</script>


@endsection