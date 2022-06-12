{{-- TODO: Admin Dashboard and footer --}}


{{-- TODO: User navbar and footer --}}

@extends('layouts.master')

@section('layoutContent')

<x-navbar />

<div class="flex w-[100vw] divide-x overflow-x-hidden">

    <div class="w-[25%] flex justify-center">
        <div class="flex flex-col items-center px-4">
            <div class="container p-4">
                <h1 class="text-center text-xl text-esomablue">Menu</h1>
            </div>
            <div class="container flex flex-col space-y-4 text-sm font-base text-esomablue">
                <div class="mt-4 flex flex-row items-center space-x-4 hover:text-esomagreen">
                    <i class="fa-solid fa-chart-line text-esomagreen"></i>
                    <a href="" class="text-esomagreen hover:text-esomagreen">Dashboard</a>
                </div>
                <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                    <i class="fa-solid fa-check hover:text-esomagreen"></i>
                    <a href="" class="hover:text-esomagreen">Activate Account</a>
                </div>
                <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                    <i class="fa-solid fa-chart-bar"></i>
                    <a href="" class="hover:text-esomagreen hover:text-esomagreen">View Subscription</a>
                </div>
                <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                    <i class="fa-solid fa-receipt hover:text-esomagreen"></i>
                    <a href="" class="">View Payment History</a>
                </div>
                <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                    <i class="fa-solid fa-lock hover:text-esomagreen"></i>
                    <a href="" class="hover:text-esomagreen">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[75%]">
        @yield('content')
    </div>

</div>

<x-footer />

@endsection