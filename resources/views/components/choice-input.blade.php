<div class="w-[90%]">
    <label><span class="text-zinc-600 flex font-bold pl-2">Extra Choice: </span>
        <input class="border shadow-sm  pl-5 py-2 w-[90%] rounded mt-3" type="text"
            name="questionGroup[{{$counter ?? 1}}][choices][]" placeholder="Add another choice" required
            autocomplete="off">
    </label>
    <span class="bg-red-500 py-2 px-3 rounded remove hover:cursor-pointer font-black text-white">X</span>
</div>