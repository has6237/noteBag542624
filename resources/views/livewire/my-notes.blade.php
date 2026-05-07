<div class="mt-10 mr-auto ml-auto max-w-180">
    @foreach ($notes as $note)

    <div class="mt-5 border border-black p-3 bg-teal-100" wire:key="{{ $note->id }}">
        <a class="hover:text-blue-600" href="note/{{ $note->id }}/show"><p class="font-semibold text-xl">{{ $note->title }}</p></a>
        <p class="text-gray-400">{{ $note->created_at->diffForHumans() }}</p>
    </div>
        
    @endforeach


</div>
