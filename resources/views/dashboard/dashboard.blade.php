@extends('layouts.master')
@section('layoutContent')
<x-navbar />
<!-- Dashboard -->
<div class="container h-full flex flex-row pt-4 divide-x px-4 font-Roboto">
    <!-- Dashboard Menu -->
    <div class="flex flex-col items-center px-4 w-1/5">
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

    <!-- Dashboard Main Content -->
    <div class="container px-4">
        <div class="container p-4">
            <h1 class="text-xl font-semibold text-esomablue">Welcome back, Adala!👋</h1>
        </div>
        <div class="container flex flex-row space-x-4 divide-x">
            <div class="container flex flex-col text-esomablue px-4">
                <h2 class="text-center text-lg font-medium py-2">Your user details</h2>
                <div class="font-light">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div class="space-y-1 text-sm">
                        <p>Name: <span class="text-base font-medium">Benard Adala Wanyande</span></p>
                        <p>Class: <span class="text-base font-medium">Form 1</span></p>
                        <p>School: <span class="text-base font-medium">Strathmore School</span></p>
                        <p>Email: <span class="text-base font-medium">benard.wanyande@strathmore.edu</span></p>
                    </div>
                </div>
            </div>
            <div class="container flex flex-col text-esomablue px-4">
                <h2 class="text-center text-lg font-medium py-2">Your account status</h2>
                <div class="mb-6">
                    <div class="space-y-1 font-light text-sm">
                        <p>Account status: <span class="text-base font-medium">Active</span></p>
                        <p>Plan: <span class="text-base font-medium">Monthly</span></p>
                    </div>
                </div>
                <div class="container flex flex-row justify-center space-x-4 font-bold">
                    <div class="bg-esomalightblue rounded p-2 text-esomawhite text-xs hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue">
                        <a href="">Activate Account</a>
                    </div>
                    <div class="bg-esomalightblue rounded p-2 text-esomawhite text-xs hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue">
                        <a href="">View Subscription</a>
                    </div>
                    <div class="bg-esomalightblue rounded p-2 text-esomawhite text-xs hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue">
                        <a href="">View Payment History</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex flex-row justify-evenly font-bold my-32">
            <div class="bg-esomablue rounded p-2 text-esomawhite text-sm hover:text-esomablue hover:bg-esomawhite hover:outline hover:outline-esomablue">
                <a href="">Go to E-Classroom</a>
            </div>
            <div class="bg-esomablue rounded p-2 text-esomawhite text-sm hover:text-esomablue hover:bg-esomawhite hover:outline hover:outline-esomablue">
                <a href="">Go to E-library</a>
            </div>
        </div>
    </div>
</div>

<x-footer />

@stop