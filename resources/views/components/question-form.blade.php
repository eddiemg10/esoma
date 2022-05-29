<div class="w-[90%] flex flex-col gap-y-3 items-center bg-zinc-100 py-5 shadow-md">

    <div class="removeQuestion p-2 bg-red-500 text-white hover:cursor-pointer hover:shadow-md rounded-md">Remove
        Question</div>
    <div class="w-[100%] flex flex-col items-center">
        <label class="w-[90%]"> <span class="text-zinc-600 font-bold pl-2">Question: </span>
            <input class="border shadow-sm block pl-5 py-2 w-[90%] rounded mt-3" type="text"
                name="questionGroup[{{$counter ?? 1}}][question]" placeholder="Enter Question" required
                autocomplete="off">
        </label>
    </div>

    <div class="w-[90%]">
        <label class=""><span class="text-zinc-600 font-bold pl-2">Answer: </span>
            <input class="border shadow-sm block pl-5 py-2  w-[90%] rounded mt-3" type="text"
                name="questionGroup[{{$counter ?? 1}}][answer]" placeholder="Enter Answer" required autocomplete="off">
        </label>
    </div>

    <div class="w-[90%]">
        <label><span class="text-zinc-600 font-bold pl-2">Choice: </span>
            <input class="border shadow-sm block pl-5 py-2 w-[90%] rounded mt-3" type="text"
                name="questionGroup[{{$counter ?? 1}}][choices][]" placeholder="Enter another choice" required
                autocomplete="off">
        </label>
    </div>

    <span class="choices w-full flex flex-col gap-y-3 items-center"></span>
    <div class="bg-blue-100 hover:bg-blue-200 transition py-1 px-10 rounded-md hover:cursor-pointer add-choice">Add a
        Choice</div>
</div>