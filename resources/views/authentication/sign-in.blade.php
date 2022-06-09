@extends('layouts.master')
@section('layoutContent')


<style>
    body {
        background-color: #014773;
    }
</style>

<div class="w-screen font-Roboto bg-esomablue container flex flex-row items-center h-screen p-4 space-x-20 justify-center">
  <!--Esoma Logo-->
  <div class="hidden min-w-sm md:container md:items-center md:max-w-md md:grid md:divide-y md:grid-cols-1 ">
    <p class="md:text-4xl px-8 lg:text-7xl text-center text-white md:p-2">Es<span class="text-esomagreen">o</span>ma-KE</span></p>
    <p class="text-sm font-extralight text-esomawhite mt-4 pt-4 text-center">For security reasons, please log out and exit your web browser when you are done accessing services that require authentication!</p>
  </div>
  <!--Sign In Stuff-->
  <div class="min-w-max container bg-esomawhite max-w-lg py-8 px-8 rounded space-y-1">
    <!--Not Registered?-->
    <div class="py-2">
      <P class="text-right text-sm font-extra-light">Don't have an account yet? <a class="underline text-esomalightblue font-medium" href="">Register</a></P>
    </div>
    <div class="pt-2 pb-1">
      <p class="text-base text-esomagrey font-medium">Welcome back!👋</p>
    </div>
    <div class="pb-2 pt-0.5">
      <h1 class="text-lg font-bold">Login to your account</h1>
    </div>
    <div>
      <form>
        <div class="flex flex-col py-2">
          <label class="my-px text-sm">Email</label>
          <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm py-1 px-1 rounded border border-esomablue" type="email">
        </div>
        <div class="flex flex-col py-2">
          <label class="my-px text-sm" for="">Password</label>
          <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm py-1 px-1 rounded border border-esomagrey" type="password">
        </div>
        <div class="grid justify-items-center">
          <input class="text-sm font-bold rounded bg-[#0597F2] py-2 px-4 mt-3 mb-3 text-esomawhite hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue" type="submit" value="Login">
        </div>
        <div>
          <p class="text-right"><a class= "my-px underline text-esomalightblue text-sm font-bold">Forgot Password?</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

@stop