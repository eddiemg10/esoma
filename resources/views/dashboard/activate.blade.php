@extends('layouts.master')
@section('layoutContent')

<x-navbar />


<!-- Dashboard -->
<div class="container h-full flex flex-row pt-4 divide-x px-4 font-Roboto pb-64">
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
                <i class="fa-solid fa-check text-esomagreen"></i>
                <a href="#" class="text-esomagreen hover:text-esomagreen">Activate Account</a>
            </div>

            <div class="flex flex-row items-center space-x-4 hover:text-esomagreen">
                <i class="fa-solid fa-receipt hover:text-esomagreen"></i>
                <a href="" class="">View Payment History</a>
            </div>

        </div>
    </div>

    <!-- Dashboard Main Content -->

    <div class="container px-4">
        <h1 class="text-center text-zinc-700 text-4xl font-semibold mt-20">View Plans</h1>

        @if (session('success'))
        <div class="flex justify-center">
            <div
                class="w-[25%] mt-5 flash text-green-500 font-bold border text-sm border-green-500 bg-green-50 text-center py-2 rounded-md">
                {{ session('success')}}
            </div>

        </div>
        @endif

        @if (session('error'))
        <div class="flex justify-center">
            <div
                class="w-[25%] mt-5 flash text-red-500 font-bold border text-sm border-red-500 bg-red-50 text-center py-2 rounded-md">
                {{ session('error')}}
            </div>

        </div>
        @endif

        <div class="w-full py-20 px-10 gap-10 flex">
            <div class="bg-blue-rich flex flex-col py-10 px-5 w-[25%] rounded-md shadow-md">
                <h1 class="text-white font-bold text-2xl">Weekly</h1>
                <h1 class="text-white text-lg">KSH 50.00</h1>
                <div class="w-full h-[2px] bg-white my-10"></div>

                <p class="flex items-center text-white font-thin gap-5"><i class="fa-solid fa-check"></i>Unrestricted
                    access
                    to notes for a week
                </p>
            </div>

            <div class="bg-blue-rich flex flex-col py-10 px-5 w-[25%] rounded-md shadow-md">
                <h1 class="text-white font-bold text-2xl">Monthly</h1>
                <h1 class="text-white text-lg">KSH 200.00</h1>
                <div class="w-full h-[2px] bg-white my-10"></div>

                <p class="flex items-center text-white font-thin gap-5"><i class="fa-solid fa-check"></i>Unrestricted
                    access
                    to notes for a month
                </p>
            </div>

            <div class="bg-blue-rich flex flex-col py-10 px-5 w-[25%] rounded-md shadow-md">
                <h1 class="text-white font-bold text-2xl">Termly</h1>
                <h1 class="text-white text-lg">KSH 500.00</h1>
                <div class="w-full h-[2px] bg-white my-10"></div>

                <p class="flex items-center text-white font-thin gap-5"><i class="fa-solid fa-check"></i>Unrestricted
                    access
                    to notes for 3 months
                </p>
            </div>

            <div class="bg-blue-rich flex flex-col py-10 px-5 w-[25%] rounded-md shadow-md">
                <h1 class="text-white font-bold text-2xl">Yearly</h1>
                <h1 class="text-white text-lg">KSH 1800.00</h1>
                <div class="w-full h-[2px] bg-white my-10"></div>

                <p class="flex items-center text-white font-thin gap-5"><i class="fa-solid fa-check"></i>Unrestricted
                    access
                    to notes for a year
                </p>
            </div>
        </div>

        <h1 class="text-center text-zinc-700 text-4xl font-semibold my-10">Account activation</h1>

        <div class="bg-slate-50 px-20 py-20 w-full rounded-md flex flex-col items-center">

            @if(!$isSubscribed)
            <form class="w-full" method="POST" action="/subscribe">
                @csrf

                <input type="hidden" name="user" value={{Auth::User()->id}}>
                <div class="flex w-full justify-center px-40">
                    <input type="text" placeholder="Enter access code" name="code" required autocomplete="off"
                        class="shadow appearance-none border rounded-l-md w-[40%] py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <button type="submit" class="bg-blue-rich rounded-r-md w-[30%] px-3 text-white py-3">Activate
                        Account</button>
                </div>

            </form>

            @else

            <div
                class="w-[40%] bg-green-50 border-2 py-5 px-3 text-xl border-solid border-green-800 flex justify-center items-center">
                Your account is already activated
            </div>

            @endif



            <div class="bg-zinc-300 w-full h-[2px] rounded-full my-20"></div>

            <div>
                <h1 class="text-zinc-700 text-4xl text-start mb-10">How to activate your account</h1>

                <div class="flex flex-wrap text-zinc-700 justify-center gap-10">
                    <div class="w-56 h-56 rounded-full px-5 bg-orange-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            1
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Go to the <span
                                class="text-green-600 font-semibold">M-PESA</span> Menu on
                            your phone
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-purple-100 flex flex-col items-center justify-center">
                        <h1
                            class=" w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            2
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Select <span class="text-green-600 font-semibold">LIPA NA
                                MPESA</span>
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-blue-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            3
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Select <span class="text-green-600 font-semibold">Buy Goods and
                                Services</span>
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-orange-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            4
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Enter Till Number <span
                                class="text-purple-900 font-bold">5056029</span>
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-purple-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            5
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Enter Amount <span class="text-green-600 font-semibold">(50, 200,
                                500, or 1800)</span>
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-blue-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            6
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Enter your MPESA PIN and Send
                        </p>
                    </div>

                    <div class="w-56 h-56 rounded-full bg-orange-100 flex flex-col items-center justify-center">
                        <h1
                            class="w-10 h-10 bg-zinc-700 rounded-full font-bold  text-white flex justify-center items-center">
                            7
                        </h1>

                        <div class="bg-zinc-700 w-[80%] h-[1px] rounded-full mt-3 mb-5"></div>

                        <p class="text-sm text-center">Confirm you want to send to <span
                                class="text-purple-900 font-semibold">ESOMA SOLUTIONS</span>
                        </p>
                    </div>

                </div>


                <div class=" text-zinc-700 w-full border-2 border-solid border-blue-rich bg-blue-100 mt-20 py-5 px-10">
                    <ul class="text-lg list-disc">
                        <li>You will receive a confirmation message from MPESA and an activation code from Esoma_Sol.
                        </li>
                        <li>You will use the activation code (in the format AB23) to activate your subscription to
                            PREMIUM MEMBERSHIP.</li>
                        <li>If you do not receive the activation code within 5 minutes, please call us on <span
                                class="font-bold">0716
                                858334.</span> </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>
<x-footer />



<script>
    $(document).ready(()=>{
       

        


    });
</script>

@stop