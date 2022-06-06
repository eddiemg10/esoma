<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

    <form action="{{url('/addschool')}}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="text" name="name" placeholder="School Name">
        <input type="submit">
    </form>

    <form action="{{url('/addclass')}}" method="post" enctype="multipart/form-data">

        @csrf
        <select name="school_id">
            @foreach($schools as $school)
            <option value="{{$school->id}}">{{$school->schoollevel_name}}</option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="Class Name">
        <input type="submit">
    </form>


    <form action="{{url('/addsubject')}}" method="post" enctype="multipart/form-data">

        @csrf
        <select name="class_id">
            @foreach($classes as $class)
            <option value="{{$class->id}}">{{$class->classlevel_name}}</option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="Subject">
        <input type="submit">
    </form>

    <form action="{{url('/addfile')}}" method="post" enctype="multipart/form-data">

        @csrf
        <select name="subject_id">
            @foreach($subjects as $subject)
            <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
            @endforeach
        </select>
        <input type="text" name="name" placeholder="File Name">
        <input type="text" name="desc" placeholder="File Description">
        <input type="file" name="doc">
        <input type="submit">
    </form>
</body>

</html>