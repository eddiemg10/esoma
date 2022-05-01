
@extends('layouts.userLayout')
@section('content')

    <div class="flex flex-row justify-center mt-10 mb-40">

        
        <div class="flex flex-col p-10 bg-zinc-100 md:w-[80vw] w-[90vw] justify-center items-center flex-wrap md:flex-nowrap">
            
            <div class="flex justify-center w-full py-3 font-semibold md:text-4xl text-xl break-normal mb-10 text-zinc-700">
                Smart Learning | Simplified Teaching
            </div>
            
            <div class="flex gap-10 justify-center items-center flex-wrap md:flex-nowrap pb-5">
                <div  class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                    <div class="h-[70%] flex justify-center items-center">
                        <img src="images/eclassroom/lms_student.svg" alt="student icon" class="w-[150px]">
                    </div>

                    <div class="w-full flex justify-center items-center h-[25%]">
                        <a href={{url('classroom/student')}} class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:"> Student Login</a>
                    </div>
                </div>


                <div  class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                    <div class="h-[70%] flex justify-center items-center">
                        <img src="images/eclassroom/lms_teacher.svg" alt="student icon" class="w-[150px]">
                    </div>

                    <div class="w-full flex justify-center items-center h-[25%]">
                        <a href="#" class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:"> Teacher Login</a>
                    </div>
                </div>

                <div  class="md:w-[20vw] w-[100%] h-[400px] bg-white rounded-xl shadow-md flex-row">

                    <div class="h-[70%] flex justify-center items-center">
                        <img src="images/eclassroom/lms_school.svg" alt="student icon" class="w-[150px]">
                    </div>

                    <div class="w-full flex justify-center items-center h-[25%]">
                        <a href="#" class="text-center bg-blue-rich text-white w-[83%] py-2 rounded-md shadow-md transition ease-in-out hover:shadow-lg hover:"> School Institution Login</a>
                    </div>
                </div>
            </div>

        </div>

    </div>


<script>

</script>

@endsection