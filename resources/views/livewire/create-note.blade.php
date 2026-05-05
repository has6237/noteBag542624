<div>


    <form class="max-w-180 p-5 ml-auto mr-auto mt-10 border border-black bg-teal-100" wire:submit="save">
        @if (session('status'))

        <div class="text-green-400">
            {{ session('status') }}
        </div>
            
        @endif


        <div>
            <label class="text-base w-full">Title</label>
            <input class="border border-black w-full h-8 pl-2" type="text" wire:model="title">
            @error('title')
            <span class="mt-1 text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-5">
            <label class="w-full">Content</label>
            <textarea class="w-full border border-black pl-2" wire:model="content" rows="8"></textarea>
            @error('content')
            <span class="mt-1 text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <button class="mt-5 border border-black p-1 hover:bg-green-500" type="submit">Create</button>

    </form>
    
</div>
