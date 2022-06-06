@extends('layouts.userLayout')
@section('content')

<div class="flex flex-row justify-center mt-10 mb-40">


    <div
        class="flex flex-col p-10 bg-zinc-100 md:w-[80vw] w-[90vw] justify-center items-center flex-wrap md:flex-nowrap">

        <div class="flex justify-center w-full py-3 font-semibold md:text-4xl text-xl break-normal mb-10 text-zinc-700">
            Smart Learning | Simplified Teaching
        </div>

        <div class="flex gap-10 justify-center items-center flex-wrap md:flex-nowrap pb-5">
            <div class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                <div class="h-[70%] flex justify-center items-center">
                    <img src="images/eclassroom/lms_student.svg" alt="student icon" class="w-[150px]">
                </div>

                <div class="w-full flex justify-center items-center h-[25%]">
                    <a href={{url('classroom/student')}}
                        class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:">
                        Student Login</a>
                </div>
            </div>


            <div class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                <div class="h-[70%] flex justify-center items-center">
                    <img src="images/eclassroom/lms_teacher.svg" alt="student icon" class="w-[150px]">
                </div>

                <div class="w-full flex justify-center items-center h-[25%]">
                    <a href={{url('classroom/teacher')}}
                        class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:">
                        Teacher Login</a>
                </div>
            </div>

            <div class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                <div class="h-[70%] flex justify-center items-center">
                    <img src="images/eclassroom/lms_school.svg" alt="student icon" class="w-[150px]">
                </div>

                <div class="w-full flex justify-center items-center h-[25%]">
                    <a href={{url('classroom/school')}}
                        class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:">
                        School Institution Login</a>
                </div>
            </div>
        </div>

    </div>

</div>


<div class="w-full flex justify-center">
    <hr class=" h-20  w-[90%] border-slate-400">
</div>
<div class="md:px-36 px-8">
    <h3 class="pb-8 text-4xl font-semibold text-blue-rich md:text-left text-center "> What is Esoma Classroom?</h3>
    <p class="leading-8 text-xl">Esoma Classroom is an interactive online classroom where students and teachers
        interact. With Esoma classroom, as a student, you are also able to track your scores and general performance,
        and share learning content online. Video content is also available in study notes to help you understand
        easily.<br><br>
        Our LMS is also designed to help schools, homeschooling institutions, and other institutions in managing their
        teaching and learning activities.</p>
</div>
<div class="md:px-36 px-8">
    <h3 class="py-8 text-4xl font-semibold text-blue-rich md:text-left text-center"> What does the Esoma Classroom
        offer?</h3>
    <div class="flex justify-center flex-wrap gap-x-8 gap-y-10 my-6">
        <div class="flex flex-col border-2 basis-[300px] rounded-md shadow-lg bg-zinc-100 px-10 pb-8">
            <h5 class="pt-3 pb-4 text-xl font-semibold text-center">Student account</h5>
            <ul class="list-disc text-base">
                <li>Join multiple classes</li>
                <li>Access content uploaded by the teacher</li>
            </ul>
        </div>
        <div class="flex flex-col border-2 basis-[300px] rounded-md shadow-lg bg-zinc-100 px-10 pb-8">
            <h5 class="pt-3 pb-4 text-xl font-semibold text-center">Teacher account</h5>
            <ul class="list-disc text-base">
                <li>Create new class</li>
                <li>Have students enroll into your class</li>
                <li>Manage multiple classes</li>
                <li> Add assignments and upload learning content</li>
            </ul>
        </div>
        <div class="flex flex-col border-2 basis-[300px] rounded-md shadow-lg bg-zinc-100 px-10 pb-8">
            <h5 class="pt-3 pb-4 text-xl font-semibold text-center">School account</h5>
            <ul class="list-disc text-base">
                <li>Manage all students in your school</li>
                <li>Manage all teachers in your school</li>
                <li>Manage all classes in your school</li>
                <li>Activate/ Deactivate classes</li>
            </ul>
        </div>
    </div>
</div>
<div class="md:px-36 px-8">
    <h4 class="text-center font-semibold text-2xl pt-20">Checkout the videos below to get familiar with Esoma
        Classroom</h4>
    <div class="flex justify-center flex-wrap gap-6 mt-6 py-10 px-20">
        <iframe class="w-[40%] aspect-[16/9]" src="https://www.youtube.com/embed/RT7VXrRLMBo"></iframe>
        <iframe class="w-[40%] aspect-[16/9]" src="https://www.youtube.com/embed/ukpVhZpgngw"></iframe>
    </div>
</div>



</div>



<script>

</script>

@endsection