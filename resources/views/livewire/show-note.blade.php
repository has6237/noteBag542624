<div class="max-w-180 mt-5 border border-black p-4 mr-auto ml-auto bg-teal-100">
    <div class="text-blue-500 underline flex flex-row gap-3">
        <a href="/my">Back to Notes</a>
        <a>Edit</a>
        <a>Delete</a>
    </div>
    <p class="font-semibold text-xl mt-5">{{ $note->title }}</p>
    <p class="text-gray-400">{{ $note->created_at->diffForHumans() }}</p>
    <p class="mt-3">{{ $note->content }}</p>
</div>
