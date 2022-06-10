@extends('layouts.master')
@section('layoutContent')

<div class="bg-slate-100 w-[100vw] h-[100vh] flex justify-center items-center">

    <form id="teacherForm" method="post" action="/classroom/school/register"
        class="relative bg-white rounded-md shadow-md p-10 w-[90%] md:w-[50%]">
        @csrf

        <div class="bg-indigo-900 inline-block py-2 px-4 absolute top-5 left-5">
            <div class="w-[150px]">
                <img src={{asset('images/logo.svg')}} alt="">
            </div>
        </div>

        <div>
            <p class="text-2xl font-light py-3 text-center w-full mt-12">School Registration</p>
            <hr class="mb-10" />
        </div>

        <p class='text-zinc-700'>NOTE: You will only be able to register one school with this account</p>

        <div class="flex flex-col w-full mt-12">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tsc">
                School Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" type="text" name="name" placeholder="Name of your School. e.g. Koil Home School"
                autocomplete="off" required value="{{old('name')}}" minlength="6">
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

        <button class="bg-indigo-900 py-2 text-white font-bold w-full rounded-md mt-8 text-center">Register
            School</button>
    </form>

</div>
<script>
    $(document).ready(function(){

        $("#teacherForm").validate();
    });
</script>



@endsection