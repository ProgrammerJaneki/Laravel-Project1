<div >
        <h2>Tutorial</h2>

        <!-- <input wire:model="name" type="text" class="bg-green-200 text-black text-sm"> -->
        <input class="bg-green-200 p-1 w-40 text-center" type="text" wire:model="name">
        <input type="checkbox" class="bg-pink-200" wire:model="display">
        <h2> {{ implode(', ', $greeting) }} {{$name}} @if ($display) ! @endif </h2>

        <select wire:model="greeting" class="bg-purple-200" multiple>
                <option class="bg-green-200">Hello</option>
                <option class="bg-pink-200">Goodbye</option>
                <option>See you</option>
        </select>


</div>
