<section class="main-body  grid grid-cols-4 grid-flow-row gap-2">
    <div class="main-left-col bg-green-400 text-center ">
        <div class="main-left-col-title">
            <i class="fa-solid fa-left-long"></i>
        <span>Left</span>
        </div>
    </div>
    <div class="main-middle-col bg-pink-400 col-start-2 col-end-4 text-center">
        <h1>Middle</h1>
    </div>
    <div class="main right-col bg-yellow-400 text-center">
        <h1>Right</h1>
    </div>

    <input wire:model="age" type="text" class="bg-red-200">
    <h2> {{ $age }} </h2>
</section>
