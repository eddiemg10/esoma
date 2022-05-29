@extends('layouts.userLayout')
<html>
    
<body>

@section('content')

<div>

<div id = login class="border-2 pb-10 mt-10 -pt-10 px-10 mx-36  bg-slate-100 ">
<h3 class ="absolute h-16 not-italic font-medium text-5xl text-gray-600 left-64 top-32 ">Smart Learning | Simplified Teaching</h3>
<div class="grid grid-cols-3 gap-0 grid justify-items-center mt-32 ml-18 flex -space-x-4 py-0.5 px-0.5 ">
    <div class ="border-2 h-58">
    <img class =" w-48 h-48" src=" {{url('/images/images/student.png')}}"/>
    <a class ="bg-blue-600 rounded text-center w-48 px-12 py-0.5 shadow-md hover:bg-sky-700"href =" ">Student Login</a>
</div>
<div class ="border-2 h-58 ">
    <img class =" w-48 h-48 " src=" {{url('/images/images/teacher.jpg')}}"/>
    <a class="bg-blue-600 rounded text-center w-48 px-12 py-0.5 shadow-md hover:bg-sky-700" href =" ">Teacher Login</a>
</div>
<div class ="border-2 h-58">
    <img class =" w-48 h-48" src="{{url('/images/images/instituition.png')}} "/>
    <a class="bg-blue-600 rounded text-center w-48 px-8 py-0.5 shadow-md hover:bg-sky-700"href =" ">School Instituition</a>
</div>
</div>
</div>
<br><br>
<hr class =" h-10 py-8 border-slate-900">
<div class ="px-36">
    <h3 class ="divide-y-[20px] text-4xl font-semibold text-cyan-600 "> What is Esoma Classroom?</h3>
    <p class ="leading-8 ">Esoma Classroom is an interactive online classroom where students and teachers interact. With Esoma classroom, as a student, you are also able to track your scores and general performance, and share learning content online. Video content is also available in study notes to help you understand easily.<br><br>
    Our LMS is also designed to help schools, homeschooling institutions, and other institutions in managing their teaching and learning activities.</p>
</div>
<div class ="px-32">
<h3 class ="py-8 text-4xl font-semibold text-cyan-600"> What does the Esoma Classroom offer?</h3>
<div class="grid grid-cols-3 gap-0 grid justify-items-center mt-6 text-xs -ml-16 ">
    <div class ="border-2 w-52 h-48 bg-slate-400 px-8">
<h5 class ="uppercase pt-3 pb-4">Student account</h5>
    <ul class="list-disc">
        <li>Join multiple classes</li>
        <li>Access content uploaded by the teacher</li>
    </ul>
</div>
<div class ="border-2 w-52 h-48 bg-slate-400 px-8">
    <h5 class ="uppercase pt-3 pb-4">Teacher account</h5>
    <ul class="list-disc">
        <li>Create new class</li>
        <li>Have students enroll into your class</li>
        <li>Manage multiple classes</li>
        <li> Add assignments and upload learning content</li>
    </ul>
</div>
<div class ="border-2 w-52 h-48 bg-slate-400 px-8">
    <h5 class ="uppercase pt-3 pb-4">School account</h5>
    <ul class="list-disc">
        <li>Manage all students in your school</li>
        <li>Manage all teachers in your school</li>
        <li>Manage all classes in your school</li>
        <li>Activate/ Deactivate classes</li>
    </ul>
</div>
</div>
</div>
<div>
    <h4 class="py-4 text-center font-bold text-xl pt-10">Checkout the videos below to get familiar with esoma classroom</h4>
    <div class="grid grid-cols-2 gap-x-4 grid justify-items-center mt-6 -ml-16 py-10 px-20">
    <embed class=""src ="https://www.youtube.com/embed/RT7VXrRLMBo"></embed>
    <embed src ="https://www.youtube.com/embed/ukpVhZpgngw"></embed>
</div>
</div>



</div>


@endsection
</body>
</html>