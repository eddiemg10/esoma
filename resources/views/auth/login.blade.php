{{-- <div class="">
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <x-button class="ml-3">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
</div> --}}



{{-- //////////////////////////////////////////////////////////////// --}}

@extends('layouts.master')
@section('layoutContent')

<script src="{{ asset('js/app.js') }}" defer></script>


<style>
    body {
        background-color: #014773;
    }
</style>

<div
    class="w-screen font-Roboto bg-[#014773] container flex flex-row items-center h-screen p-4 space-x-20 justify-center">
    <!--Esoma Logo-->
    <div class="hidden min-w-sm md:container md:items-center md:max-w-md md:grid md:divide-y md:grid-cols-1 ">
        <div class="w-full">
            <img src="{{asset('images/logo.svg')}}" alt="">
        </div>
        <p class="text-sm font-extralight text-white mt-4 pt-4 text-center">For security reasons, please log out and
            exit your web browser when you are done accessing services that require authentication!</p>
    </div>
    <!--Sign In Stuff-->
    <div class="min-w-max container bg-white max-w-lg py-8 px-8 rounded space-y-1">
        <!--Not Registered?-->
        <div class="py-2">
            <P class="text-right text-sm font-extra-light">Don't have an account yet? <a
                    class="underline text-blue-rich font-medium" href="{{route('register')}}">Register</a></P>
        </div>
        <div class="pt-2 pb-1">
            <p class="text-base text-zinc-500 font-medium">Welcome back!👋</p>
        </div>
        <div class="pb-2 pt-0.5">
            <h1 class="text-lg font-bold">Login to your account</h1>
        </div>
        <div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-col py-2">
                    <label class="my-px text-sm">Email</label>
                    <input id="email"
                        class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm py-1 px-1 rounded border border-[#014773]"
                        type="email" name="email" value="{{old('email')}}" autofocus required>
                </div>
                <div class="flex flex-col py-2">
                    <label class="my-px text-sm" for="">Password</label>
                    <input id="password"
                        class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm py-1 px-1 rounded border border-zinc-500"
                        type="password" name="password" required>
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="grid justify-items-center">
                    <input
                        class="text-sm font-bold rounded bg-[#0597F2] py-2 px-4 w-full hover:cursor-pointer mt-3 mb-3 text-white hover:bg-[#014773] transition hover:outline hover:outline-blue-rich"
                        type="submit" value="Login">
                </div>
                <div>

                </div>
            </form>
        </div>
    </div>
</div>

@stop