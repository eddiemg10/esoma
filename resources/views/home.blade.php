
@extends('layouts.userLayout')

@section('content')
    <div class="flex justify-center items-center">
        <h1 class="bg-red-200 p-8 cursor-pointer hover:bg-red-300">Click Me</h1>

    </div>


<script>
$("h1").click(function() {
    alert("JQUERY Connected");
});
</script>

@endsection