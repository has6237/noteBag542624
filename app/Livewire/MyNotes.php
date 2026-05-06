<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;
class MyNotes extends Component
{
    public function render()
    {
        $notes = Note::where('user_id', auth()->id())->latest()->get();
        return view('livewire.my-notes', compact('notes'));
    }
}
