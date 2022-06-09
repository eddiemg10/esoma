{{-- TODO: Admin Dashboard and footer --}}


{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')

<x-navbar />

<div class="flex w-[100vw]">

    <div class="w-[25%] bg-red-50">
        TODO: Make the navbar here (in the layout)
    </div>

    <div class="w-[75%]">
        @yield('content')
    </div>

</div>

<x-footer />

@endsection