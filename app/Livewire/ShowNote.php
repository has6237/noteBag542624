<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class ShowNote extends Component
{
    public $note;

    public function mount(Note $note) {
        $this->note = $note;
    }
    public function render()
    {
        $note = $this->note;
        return view('livewire.show-note', compact('note'));
    }
}
