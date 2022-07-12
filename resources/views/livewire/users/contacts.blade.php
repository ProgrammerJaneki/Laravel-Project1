<div class="grid bg-green-200 p-2 mt-6 justify-center ">
    <h2>BASIC FILE UPLOAD </h2>

    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo">

        <!-- Incase of Error -->
        @error('photo') <span class="error"> {{ $errorMessage }} </span> @enderror

        <button type="submit" class="bg-red-200 px-8 py-2 w-30 rounded-2xl ">Save Photo</button>

        <!-- Next One is to Store the image -->

    </form>


</div>
