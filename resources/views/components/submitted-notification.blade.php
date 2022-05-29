<div class="w-full bg-sky-100 py-10 text-zinc-600 rounded-md text-xl flex flex-col items-center">
    <div class="bg-green-200 p-3 rounded-full mb-5">
        <i class="fa-solid fa-check text-zinc-700"></i>
    </div>
    <p>Assignment has been Submitted </p>
    <a href={{url('classroom/student/'.$classID.'/results/'.$assignment)}}
        class="hover:cursor-pointer text-blue-700 pt-3">See results</a>
</div>