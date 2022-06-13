{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name')" required autofocus />
            </div>

            <div>
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}




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
    <div
        class="mx-10 pr-8 hidden min-w-sm md:container md:items-center md:max-w-md md:grid md:divide-y md:grid-cols-1 md:flex md:justify-center md:w-full">
        <div class="w-full">
            <img src="{{asset('images/logo.svg')}}" alt="">
        </div>
        <p class="text-sm font-extralight text-white mt-4 pt-4 text-center">For security reasons, please log out and
            exit your web browser when you are done accessing services that require authentication!</p>
    </div>
    <!--Register Stuff-->
    <div class="mr-4 min-w-max container bg-white max-w-lg py-8 px-8 rounded space-y-1">
        <!--Not Registered?-->
        <div class="py-2">
            <P class="text-right text-sm font-extra-light">Already have an account? <a
                    class="underline text-blue-rich font-medium" href="{{route('login')}}">Login</a></P>
        </div>
        <div class="pt-2 pb-1">
            <p class="text-base text-zinc-500 font-medium">Welcome!👋</p>
        </div>
        <div class="pb-2 pt-0.5">
            <h1 class="text-lg font-bold">Create an account with us</h1>
        </div>
        <div>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex flex-row space-x-2 md:space-x-8">
                    <div class="flex flex-col py-2">
                        <label class="my-px text-sm " for="first_name">First Name</label>
                        <input id="first_name" name="first_name" value="{{old('first_name')}}"
                            class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm font-medium py-1 px-1 rounded border border-[#014773] "
                            type="text">
                    </div>
                    <div class="flex flex-col py-2">
                        <label class="my-px text-sm" for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" value="{{old('last_name')}}"
                            class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm  py-1 px-1 rounded border border-[#014773]"
                            type="text">
                    </div>
                </div>
                <div class="flex flex-col py-2">
                    <label class="my-px text-sm">Email</label>
                    <input id="email" name="email" value="{{old('email')}}"
                        class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm py-1 px-1 rounded border border-[#014773]"
                        type="email">
                </div>
                <div class="flex flex-col py-2">
                    <label class="my-px text-sm" for="">Password</label>
                    <input id="password" name="password"
                        class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm py-1 px-1 rounded border border-zinc-500 "
                        type="password">
                </div>
                <div class="flex flex-col py-2">
                    <label class="my-px text-sm" for="">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation"
                        class="hover:outline-none hover:border hover:border-blue-rich focus:outline-none focus:border focus:border-blue-rich my-px text-sm py-1 px-1 rounded border border-zinc-500 "
                        type="password">
                </div>
                <div class="grid justify-items-center">
                    <input
                        class=" hover:bg-[#014773] hover:cursor-pointer  w-full hover:outline hover:outline-blue-rich text-white text-sm font-bold rounded bg-[#0597F2] py-2 px-4 mt-3 mb-3"
                        type="submit" value="Register">
                </div>
                <div>
                    <p class="text-right"><a class="my-px underline text-blue-rich text-sm font-bold">Forgot
                            Password?</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@stop