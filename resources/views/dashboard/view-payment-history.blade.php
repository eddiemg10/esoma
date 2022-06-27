@extends('layouts.master')
@section('layoutContent')
<x-navbar focus="" />
<!-- Dashboard -->
<div class="container h-full flex flex-row pt-4 divide-x px-4 font-Roboto">
    <!-- Dashboard Menu -->
    <div class="flex flex-col items-center px-4 w-1/5">
        <div class="container p-4">
            <h1 class="text-center text-xl text-esomablue">Menu</h1>
        </div>
        <div class="container flex flex-col space-y-4 text-sm font-base text-esomablue">
            <div class="mt-4 flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-chart-line hover:text-esomagreen"></i>
                <a href="/dashboard" class=" hover:text-esomagreen">Dashboard</a>
            </div>
            <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-check hover:text-esomagreen"></i>
                <a href="/dashboard/activate" class=" hover:text-esomagreen">Activate Account</a>
            </div>

            <div class="flex flex-row items-center space-x-4 text-esomagreen">
                <i class="fa-solid fa-receipt text-esomagreen hover:text-esomagreen"></i>
                <a href="#" class="">View Payment History</a>
            </div>

        </div>
    </div>

    <!-- Dashboard Main Content -->
    <div class="container px-4 pb-[100vh]">
        <div class="container p-4">
            <h1 class="text-xl font-semibold text-esomablue">Welcome back, {{Auth::User()->firstName}}!👋</h1>
        </div>
        <div class="container flex flex-row justify-center">
            <div class="container flex flex-col text-esomablue px-4">
                <h2 class="text-center text-lg font-medium py-2">Your payment history</h2>
                <div class="mb-6 flex justify-center mt-4 mb-8">

                    <div class="flex flex-col items-center gap-y-5 w-full">

                        @forelse ($payments as $payment)
                        <div class="flex justify-around py-3 px-4 bg-slate-200 w-[80%]">
                            <p class=""><span class="font-bold">{{$payment->amount}}</span> <span
                                    class="text-xs font-thin">KSH</span></p>
                            <p>{{date('d/m/Y',strtotime($payment->created_at))}}</p>
                        </div>
                        @empty
                        <div class="space-y-1 font-light text-sm flex flex-row items-center space-x-2">
                            <i class="fa-solid fa-face-frown pt-1"></i>
                            <p class="grid items-center">Sorry, no payment records found under your name.</p>
                        </div>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<x-footer />

@stop