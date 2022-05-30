@extends('layouts.eclassroomSchoolLayout')
@section('main_content')

<div class="text-center p-7 mt-2 text-sky-900 text-lg">All Students</div>

<div class="w-full flex justify-center mb-10">
    <input
        class="shadow appearance-none border rounded w-[50%] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline0"
        type="text" id="search-posts" name="student" placeholder="Search by Name or Email">

    <input
        class="ml-3 py-2 px-5 rounded-md bg-sky-600 text-white shadow-md hover:bg-gray-400 cursor-pointer transition assignment text-left"
        type="submit" name="sstudent" value="Search Student"> <br>

</div>
<div class="w-full flex justify-center">
    <table class="mt-8 shadow-2xl table-auto rounded-md w-[80%]" id="students">
        <thead class="text-white bg-gray-700">
            <tr>
                <th class="px-6 py-3">First Name</th>
                <th class="px-6 py-3">Last Name</th>
                <th class="px-6 py-3">Email Address</th>

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