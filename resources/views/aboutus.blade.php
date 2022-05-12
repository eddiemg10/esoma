@extends('layouts.userLayout')

@section('content')
    
        <div class ="bg-[url('/images/images/back.jpg')] bg-contain px-32 py-40 pb-20">
        <h1 class=" text-center absolute h-16 not-italic font-medium text-5xl text-gray-600 top-32 ml-96 border-b-4 border-cyan-500">ABOUT US</h1>
        <h3 class="mt-30 text-lg text-center  ">A new fun way to learn</h3>
        <!-- <h3 class="mt-36 text-lg text-center overflow-hidden before:h-[1px] after:h-[1px] after:bg-black 
           after:inline-block after:relative after:align-middle after:1/4 
           before:bg-black before:inline-block before:relative before:align-middle 
           before:1/4 before:right-2 after:left-2 text-xl p-4">A new fun way to learn
</h3> -->
</div>
<div class="px-32 leading-8">
        <br>
        <p><span class="font-semibold">E-Soma-KE Learning Management System </span>is designed to help schools, homeschooling institutions, and other institutions in managing their teaching and learning activities.<br> We have provided a platform to enable the Kenyan Student access learning materials to help him / her begin and continue smoothly with his / her study. Esoma.Ke has provided materials for every level of study contained within the Kenyan Education Curriculumn.</p>
        <br>
<h2 class=" font-semibold border-b-4 border-cyan-500 uppercase text-2xl"> Learning<h2><br>
<img class="object-left float-right " src="{{url('/images/images/learning.jpg')}}">
    <p class=""> At Esoma-KE, we look beyond the problems and restrictions to bring you a learning platform like never before.As the Kenyan Education curruculum changes, we have put effort in ensuring that the content we supply is in-line with the 2.6.6.3 competence-based curriculum. The content has been analyzed and sorted to ensure only the most relevant is given to you. We have pledged to fight for quality content to make it easy for you to learn fast and efficiently.<br>We believe that learning should not only be for all but also be accessible to as many people as possible. We help every student in Pre-Primary, Primary and Secondary levels as well as teachers out there access materials for study, at all times.</p>
    <br>
<h2 class=" font-semibold border-b-4 border-cyan-500 uppercase text-2xl"> Technology<h2><br>
<img class="object-left float-left " src="{{url('images/images/tech.jpg')}}">
    <p>The Power of technology is unimaginable. Every day, we bare witness to new technology systems that help improve our daily lives. At Esoma-KE, we have taken advantage of the technology to help students and teachers study and learn in Kenya's new 2.6.6.3 curriculum. Our content has been edited and processed to ensure that it is accessible easily from all devices from mobile phones to tablets and computers. With ownership of mobile devices on the rise and the immense supply of affordable internet, our content is tailored to be accessed easily and with minimal mobile data hence efficient.</br>From statistics, our site loads in an average of 2.56 seconds in a 3G network and 4.78 seconds in a 2G netwerk. This presents a 87% efficiency. Our technicians are working tirelessly to ensure that this efficiency is improved to facilitate the site's efficiency and performance.</p>
    <br>

<h2 class=" font-semibold border-b-4 border-cyan-500 uppercase text-2xl">What we offer</h2>
<br>
<img class="object-left float-right h-40 w-60" src="{{url('images/images/offer.jpg')}}">
<ul class="list-disc float ">
<li>CBC Program Grade 1 to Grade 4</li>
<li>Primary school</li>
<li> Secondary school</li>
<li>KCPE and KCSE Revision</li>
<li>Esoma Classroom</li>
</ul>
</div>

@endsection