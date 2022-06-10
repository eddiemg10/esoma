@extends('layouts.master')
@section('layoutContent')

<div class="bg-slate-100 w-[100vw] h-[100vh] flex justify-center items-center">

    <form id="teacherForm" method="post" action="/classroom/teacher/register"
        class="relative bg-white rounded-md shadow-md p-10 w-[90%] md:w-[50%]">
        @csrf

        <div class="bg-indigo-900 inline-block py-2 px-4 absolute top-5 left-5">
            <div class="w-[150px]">
                <img src={{asset('images/logo.svg')}} alt="">
            </div>
        </div>

        <div>
            <p class="text-2xl font-light py-3 text-center w-full mt-12">Teacher Registration</p>
            <hr class="mb-10" />
        </div>

        <p class='text-zinc-700'>Please provide your tsc number. This number will be used by school institutions to add
            you to
            classrooms</p>

        <div class="flex flex-col w-full mt-12">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tsc">
                Tsc Number
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="tsc" type="number" name="tsc_number" placeholder="tsc number" autocomplete="off" required
                value="{{old('tsc_number')}}" minlength="6">
        </div>

        @if ($errors->any())
        <div class="p-4 bg-red-50 text-red-900 border border-solid border-red-900 my-5">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button class="bg-indigo-900 py-2 text-white font-bold w-full rounded-md mt-8 text-center">Make Account</button>
    </form>

</div>
<script>
    $(document).ready(function(){

        $("#teacherForm").validate();
    });
</script>



@endsection