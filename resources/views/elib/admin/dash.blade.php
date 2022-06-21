@extends('layouts.userLayout')
@section('layoutContent')

@php
$index = 0;
@endphp

<div class="flex flex-row h-[100%]">
    <div class="flex  w-[20%] flex-col items-center bg-blue-800 text-white">
        <div class="flex flex-col items-center py-4">
            <h1 class="text-4xl font-bold p-2">E-s<a class="text-yellow-500">o</a>ma</h1>
            <h3 class="text-xl font-normal">ADMIN PANEL</h3>
        </div>
        <div class="h-[2px] w-[80%] bg-white"></div>
        <div class="flex flex-col gap-3 rounded-md p-3 pb-[1000px]">
            <a href="adminview" class="w-[250px] rounded-md p-2 hover:bg-blue-900 hover:shadow-inner">E-Library</a>
            <a href="#" class="w-[250px] rounded-md p-2 hover:bg-blue-900">Esoma LMS</a>
            <a href="#" class="w-[250px] rounded-md p-2 hover:bg-blue-900">Esoma Blog</a>
        </div>
    </div>
    <div class="flex w-[60%] flex-col">
        <div class="mt-12 ml-20 p-10 text-4xl font-semibold">
            <h1>E-Library</h1>
        </div>

        <div class="ml-10 flex flex-col bg-gray-100 w-[90%]">
            <div class="flex w-[100%] justify-center">
                <form action="{{url('/addschool')}}" method="post" enctype="multipart/form-data"
                    class="flex flex-row rounded-md p-12">

                    @csrf
                    <div class="flex">
                        <label class="flex mr-7 mt-2 font-normal">Add School<label>
                    </div>
                    <div class="flex">
                        <input class="w-[320px] rounded-l-md border-2 border-slate-900 p-2" type="text" name="name">
                        <input class="rounded-r-md bg-blue-800 p-2 text-white" type="submit" value="Add">
                    </div>
                </form>
            </div>
            <div class="flex flex-col p-6 ml-8">
                <h1 class="text-xl font-semibold text-zinc-700">Current Categories</h1>
                <h4 class="text-sm font-extralight text-zinc-700 ml-2">(Expand to view further details)</h4>
            </div>
            <div class="flex flex-col items-center pb-20">
                @foreach($schools as $school)


                <div tabindex="-1" aria-hidden="true"
                    class="add-class-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button"
                                class=" close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-dark">Add a new class
                                </h3>
                                <form class="" action="{{url('/addclass')}}" id="classroom-form" method="POST">
                                    @csrf
                                    <input type="text" name="name" placeholder="New Class"
                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black"
                                        required>

                                    <input type="hidden" name="school_id" value='{{$school->id}}' />

                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                        Class</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div tabindex="-1" aria-hidden="true"
                    class="edit-school-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-[70%]  h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <button type="button"
                                class="edit-school-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="add-class-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit School
                                </h3>
                                <form class="" action="{{url('/editschool/'.$school->id)}}" id="classroom-form"
                                    method="POST">
                                    @csrf
                                    <input type="text" name="name" value="{{$school->schoollevel_name}}"
                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-black"
                                        required>

                                    <input type="hidden" name="school_id" value='{{$school->id}}' />

                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                        School</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="school-ting flex w-[95%] flex-col items-center p-10">
                    <!--the main div for schools-->
                    <div class="flex w-[100%] gap-24 flex-row rounded-t-md bg-yellow-400 p-3 text-white">
                        <div class="flex flex-row gap-4 p-2 ml-4">
                            <button id="{{$school->id}}" class="text-2xl flex hidden"><i
                                    class="fa-solid fa-play"></i></button>
                            <button id='btn2' class="text-xl flex"><i class="fa-solid fa-play rotate-90"></i></button>
                            <h2 class="text-2xl font-normal flex">{{$school->schoollevel_name}}</h2>
                        </div>

                        <div class="w-[50%] py-1  flex justify-center float-right gap-9 text-xs font-normal">
                            <div class="flex flex-col items-center gap-1">
                                <button data-school='{{$school->id}}' class="edit-school flex text-2xl"><i
                                        class="fa-solid fa-pen"></i></button>
                                <p class="flex">Edit</p>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <button class="delete-school flex text-2xl" data-school="{{$school->id}}"><i
                                        class="fa-solid fa-circle-minus"></i></button>
                                <p class="flex">Delete</p>
                            </div>
                            <div class="flex  flex-col items-center gap-1">
                                <p class="flex text-3xl font-thin">|</p>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <button data-school='{{$school->id}}' class="school flex text-2xl"><i
                                        class="fa-solid fa-circle-plus"></i></button>
                                <p class="flex">Add Class</p>
                            </div>
                        </div>
                    </div>



                    <div id="playingschool" class="flex w-[100%] flex-col items-center bg-white p-10 gap-4 rounded-md">
                        @foreach($classes as $class)

                        <div tabindex="-1" aria-hidden="true"
                            class="add-subject-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-[70%]  h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="subject-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="add-class-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Add a new
                                            subject
                                        </h3>
                                        <form class="" action="{{url('/addsubject')}}" id="classroom-form"
                                            method="POST">
                                            @csrf
                                            <input type="text" name="name" placeholder="New Subject"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                                required>

                                            <input type="hidden" name="class_id" value='{{$class->id}}'>


                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                                                Subject</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div tabindex="-1" aria-hidden="true"
                            class="edit-class-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                            <div class="relative p-4 w-[70%]  h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <button type="button"
                                        class="edit-class-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="add-class-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div class="py-6 px-6 lg:px-8">
                                        <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit Class
                                        </h3>
                                        <form class="" action="{{url('/editclass/'.$class->id)}}" id="classroom-form"
                                            method="POST">
                                            @csrf
                                            <input type="text" name="name" value="{{$class->classlevel_name}}"
                                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                                required>

                                            <input type="hidden" name="class_id" value='{{$class->id}}'>


                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                                Class</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                        @if($school->id==$class->school_level_id)
                        <div class="flex w-[98%] gap-40 bg-blue-200 p-1">
                            <!--the main div for classes-->
                            <div class="w-[40%] flex items-center flex-row gap-2 ml-4 text-sm">
                                <h2 class=" font-normal flex">{{$class->classlevel_name}}</h2>
                            </div>
                            <div class="w-[60%] py-2 flex float-right gap-7 text-xs font-normal">
                                <div class="flex flex-col items-center gap-1">
                                    <button class="edit-class flex text-xl"><i class="fa-solid fa-pen"></i></button>
                                    <p class="flex">Edit</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <button class="delete-class flex text-xl" data-class1="{{$class->id}}"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="flex">Delete</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <p class="flex text-3xl font-thin">|</p>
                                </div>
                                <div class="flex flex-col items-center gap-1">
                                    <button class="class flex text-xl"><i class="fa-solid fa-circle-plus"></i></button>
                                    <p class="flex">Add Subject</p>
                                </div>
                            </div>
                        </div>

                        <div id='subjects' name="subjects" class="subjects flex flex-col p-4 gap-2">
                            @foreach($subjects as $sub)
                            <div tabindex="-1" aria-hidden="true"
                                class="add-file-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-[70%]  h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <button type="button"
                                            class="file-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-toggle="add-class-modal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Add New
                                                File
                                            </h3>
                                            <form action={{url('/addfile')}} method="post"
                                                enctype="multipart/form-data">

                                                @csrf

                                                <input type="text" name="name" placeholder="New File Name"
                                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black">
                                                <input type="text" name="desc" placeholder="File Description"
                                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black">
                                                <input
                                                    class="text-sm text-gray-900 bg-white rounded-md border border-gray-300 cursor-pointer file:p-2 w-full focus:outline-none mb-5"
                                                    type="file" name="doc">
                                                <input type="checkbox" name="restrict" value='1'>
                                                <label>Mark as Premium</label>
                                                <input type="hidden" name="subject_id" value=' {{$sub->id}}'>


                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-8 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                                                    File</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div tabindex="-1" aria-hidden="true"
                                class="edit-subject-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto flex justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-[70%]  h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <button type="button"
                                            class="edit-subject-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-toggle="add-class-modal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit
                                                Subject
                                            </h3>
                                            <form class="" action="{{url('/editsubject/'.$sub->id)}}"
                                                id="classroom-form" method="POST">
                                                @csrf
                                                <input type="text" name="name" value="{{$sub->subject_name}}"
                                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black"
                                                    required>

                                                <input type="hidden" name="subject_id" value='{{$sub->id}}'>



                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit

                                                    Subject</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            @if($class->id==$sub->class_level_id)
                            <div class="w-[500px] bg-gray-200 p-2 font-medium text-zinc-900">
                                <ul class="">
                                    <li class="ml-6" data-subject="{{$sub->id}}"><i data-toggle="{{$index++}}"
                                            class="hover:cursor-pointer subject-toggle fa-solid fa-sort-down -rotate-90 mr-4 classroom"
                                            data-subject="{{$sub->id}}"></i>{{$sub->subject_name}}
                                        <div class="w-[40%] flex float-right gap-4 text-xs font-normal">
                                            <div class="flex flex-col items-center gap-1">
                                                <button class="edit-subject flex text-xl"><i
                                                        class="fa-solid fa-pen"></i></button>
                                                <p class="flex">Edit</p>
                                            </div>
                                            <div class="flex flex-col items-center gap-1">
                                                <button class="delete-subject flex text-xl"
                                                    data-subject="{{$sub->id}}"><i
                                                        class="fa-solid fa-circle-minus"></i></button>
                                                <p class="flex">Delete</p>
                                            </div>
                                            <div class="flex flex-col items-center gap-1">
                                                <p class="flex text-3xl font-thin">|</p>
                                            </div>
                                            <div class="flex flex-col items-center gap-1">
                                                <button class="subject flex text-xl"><i
                                                        class="fa-solid fa-circle-plus"></i></button>
                                                <p class="flex">Add File</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>


                            @foreach($fileuploads as $file)


                            <div tabindex="-1" aria-hidden="true"
                                class="edit-file-modal hidden bg-slate-200 bg-opacity-80 overflow-y-hidden overflow-x-hidden fixed top-0 inset-x-0 mx-auto justify-center z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                <div class="relative p-4 w-[70%]  h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <button type="button"
                                            class="edit-file-close-modal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                            data-modal-toggle="add-class-modal">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div class="py-6 px-6 lg:px-8">
                                            <h3 class="mb-6 text-xl font-medium text-gray-900 dark:text-black">Edit File
                                            </h3>
                                            <form class="" action="{{url('/editfile/'.$file->id)}}" id="classroom-form"
                                                method="POST">
                                                @csrf
                                                <input type="text" name="name" value="{{$file->name}}"
                                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black">
                                                <input type="text" name="desc" value="{{$file->description}}"
                                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 mb-10 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black">
                                                {{-- <input
                                                    class="text-sm text-gray-900 bg-white rounded-md border border-gray-300 cursor-pointer file:p-2 w-full focus:outline-none mb-5"
                                                    type="file" name="doc" value="{{$file->doc}}"> --}}
                                                <input type="hidden" name="subject_id" value='{{$sub->id}}'>

                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                                                    File</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            @if($sub->id==$file->subject_id)

                            <div
                                class="file-uploads w-[450px] ml-4 bg-orange-200 relative  text-sm text-zinc-900 p-2 gap-2">

                                <div class="flex items-center">

                                    <a href={{asset("assets/".$file->doc)}} target="_blank" class="pl-5
                                        hover:cursor-pointer flex gap-x-5 items-center"><i
                                            class="fa-solid fa-file"></i>{{$file->name}}</a>
                                    <div class="absolute right-10 flex gap-5 text-xs font-normal">

                                        <button class="edit-file flex text-l"><i class="fa-solid fa-pen"></i></button>


                                        <button class="delete-file flex text-l" data-fileupload="{{$file->id}}"><i
                                                class="fa-solid fa-circle-minus"></i></button>

                                    </div>
                                </div>




                            </div>

                            @endif
                            @endforeach


                            @endif
                            @endforeach

                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $(".school").click(function(e) {
            let modal = $(this).parent().parent().parent().parent().prev().prev();
            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });

        $('.classroom').click(function(e) {
            $(this).addClass("rotate-90");
        });

        $(".edit-school").click(function(e) {
            let modal = $(this).parent().parent().parent().parent().prev();
            // console.log(modal);
            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });

        $(".class").click(function(e) {
            let modal = $(this).parent().parent().parent().prev().prev();
            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });


        $(".subject").click(function(e) {
            let modal = $(this).parent().parent().parent().parent().parent().prev().prev();
            // console.log(modal);
            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });


        // To be fixed

        // $(".subject-toggle").click(function(e){

        //     let target = $(".file-uploads").eq( $(this).data('toggle') );
        //     target.toggle();
        //     console.log(target);
        // });



        $(".edit-class").click(function(e) {
            let modal = $(this).parent().parent().parent().prev();

            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });

        $(".edit-subject").click(function(e) {
            let modal = $(this).parent().parent().parent().parent().parent().prev();

            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });

        $(".edit-file").click(function(e) {
            let modal = $(this).parent().parent().parent().prev()
            modal.removeClass('hidden');
            modal.addClass('flex');
            stopScroll();

        });

        $(".close-modal").click(function(e) {

            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });

        $(".edit-school-close-modal").click(function(e) {

            let modal = $(this).parent().parent().parent();
            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });

        $(".subject-close-modal").click(function(e) {

            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });

        $(".file-close-modal").click(function(e) {



            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });

        $(".edit-class-close-modal").click(function(e) {



            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });


        $(".edit-class-close-modal").click(function(e) {


            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });


        $(".edit-subject-close-modal").click(function(e) {

            let modal = $(this).parent().parent().parent();

            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });

        $(".edit-file-close-modal").click(function(e) {

            let modal = $(this).parent().parent().parent();
            // console.log(modal)
            modal.removeClass('flex');
            modal.addClass('hidden');
            resumeScroll();

        });


        function stopScroll() {

            var scrollPosition = [
                self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
                self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop

            ];
            var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
            html.data('scroll-position', scrollPosition);
            html.data('previous-overflow', html.css('overflow'));
            html.css('overflow', 'hidden');
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }


        function resumeScroll() {
            var html = jQuery('html');
            var scrollPosition = html.data('scroll-position');
            html.css('overflow', html.data('previous-overflow'));
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }

        $(".delete-school").click(function(e) {
            let school = $(this).data('school');
            if (confirm('Are you sure you want to permanently delete this school?')) {

                $.post("/school/delete", {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        data: {
                            school: school
                        },
                    },

                    function(data, status) {
                        location.reload();
                    });
            }
        });

        $(".delete-class").click(function(e) {
            let class1 = $(this).data('class1');
            if (confirm('Are you sure you want to delete this class?')) {

                $.post("/libclass/delete", {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        data: {
                            class1: class1
                        },
                    },

                    function(data, status) {
                        location.reload();
                    });
            }
        });

        $(".delete-subject").click(function(e) {
            let subject = $(this).data('subject');
            if (confirm('Are you sure you want to delete this subject?')) {

                $.post("/subject/delete", {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        data: {
                            subject: subject
                        },
                    },

                    function(data, status) {
                        location.reload();
                    });
            }
        });

        $(".delete-file").click(function(e) {
            let fileupload = $(this).data('fileupload');
            if (confirm('Are you sure you want to delete this file?')) {

                $.post("/fileupload/delete", {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                        data: {
                            fileupload: fileupload
                        },
                    },

                    function(data, status) {
                        location.reload();
                    });
            }
        });
    });
</script>

@endsection