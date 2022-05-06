@extends('layouts.master')
@section('layoutContent')

<h1 class="text-4xl text-bold">Add Assignment</h1>

<form class=" mt-10" action="/assignments" method="POST">
    @csrf

    <label for="marks" class="block ml-20">Total Marks</label>
    <input id="marks" class="border shadow-sm my-4 mb-10 w-[150px] rounded ml-20" type="number" name="marks" min="0">

    <input class="border shadow-sm block my-4 w-[300px] rounded ml-20" type="text" name="question" placeholder="Enter Question">
    <input class="border shadow-sm block my-4 w-[300px] rounded ml-20" type="text" name="answer" placeholder="Enter Answer">
    <input class="border shadow-sm block my-4 w-[300px] rounded ml-20" type="text" name="choices[]" placeholder="Choice 1">
    
    <span id="choices"></span>
    <div class="bg-red-300 ml-20 px-3 block w-[160px]" id="add">Add Choices</div>
    
    <button class="bg-blue-100 px-4 py-2 ml-[150px] rounded-xl mt-16">Submit<button>
</form>


<script>
    $(document).ready(function(){

        function uniqId() {
            return Math.round(new Date().getTime() + (Math.random() * 100));
        }


        $("#add").click(function (e){
            $("#choices").append('<div id="'+uniqId()+'"class="block hover:cursor-pointer"><input class="border shadow-sm my-4 w-[300px] rounded ml-20" type="text" name="choices[]" placeholder="Enter additional choice"> <span class="remove text-white bg-red-500 p-2 rounded-full">X</span></div>')
        
            $(".remove").click(function (e){
                console.log( )
            $(this).parent()[0].remove();
        });
        });

        
    })
</script>


@endsection