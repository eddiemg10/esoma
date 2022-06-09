@extends('layouts.master')
@section('layoutContent')

<style>
    body {
        background-color: #014773;
    }
</style>

<div class="w-screen font-Roboto bg-esomablue container flex flex-row items-center h-screen p-4 space-x-20 justify-center">
  <!--Esoma Logo-->
  <div class="mx-10 pr-8 hidden min-w-sm md:container md:items-center md:max-w-md md:grid md:divide-y md:grid-cols-1 md:flex md:justify-center md:w-full">
    <p class="md:text-4xl px-8 lg:text-7xl text-center text-esomawhite md:p-2">Es<span class="text-esomagreen">o</span>ma-KE</span></p>
    <p class="text-sm font-extralight text-esomawhite mt-4 pt-4 text-center">For security reasons, please log out and exit your web browser when you are done accessing services that require authentication!</p>
  </div>
  <!--Register Stuff-->
  <div class="mr-4 min-w-max container bg-esomawhite max-w-lg py-8 px-8 rounded space-y-1">
    <!--Not Registered?-->
    <div class="py-2">
      <P class="text-right text-sm font-extra-light">Already have an account? <a class="underline text-esomalightblue font-medium" href="">Login</a></P>
    </div>
    <div class="pt-2 pb-1">
      <p class="text-base text-esomagrey font-medium">Welcome!👋</p>
    </div>
    <div class="pb-2 pt-0.5">
      <h1 class="text-lg font-bold">Create an account with us</h1>
    </div>
    <div>
      <form>
        <div class="flex flex-row space-x-2 md:space-x-8">
          <div class="flex flex-col py-2">
            <label class="my-px text-sm " for="">First Name</label>
            <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm font-medium py-1 px-1 rounded border border-esomablue " type="text">
          </div>
          <div class="flex flex-col py-2">
            <label class="my-px text-sm " for="">Last Name</label>
            <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm  py-1 px-1 rounded border border-esomablue" type="text">
          </div>
        </div>
        <div class="flex flex-col py-2">
          <label class="my-px text-sm">Email</label>
          <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm py-1 px-1 rounded border border-esomablue" type="email">
        </div>
        <div class="flex flex-col py-2">
          <label class="my-px text-sm" for="">User Type</label>
          <select class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm py-1 px-1 rounded border border-esomablue" name="" id="">
            <option value="">Student</option>
            <option value="">Teacher</option>
            </select>
        </div>
        <div class="flex flex-col py-2">
          <label class="my-px text-sm" for="">Password</label>
          <input class="hover:outline-none hover:border hover:border-esomalightblue focus:outline-none focus:border focus:border-esomalightblue my-px text-sm py-1 px-1 rounded border border-esomagrey " type="password">
        </div>
        <div class="grid justify-items-center">
          <input class="hover:text-esomalightblue hover:bg-esomawhite hover:outline hover:outline-esomalightblue text-esomawhite text-sm font-bold rounded bg-[#0597F2] py-4 px-4 mt-3 mb-3" type="submit" value="Register">
        </div>
        <div>
          <p class="text-right"><a class= "my-px underline text-esomalightblue text-sm font-bold">Forgot Password?</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
@stop