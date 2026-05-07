<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class ShowNote extends Component
{
    public $note;

    public function mount(Note $note) {
        $this->note = $note;
        if (auth()->id() != $note->user->id) {
        abort(403);
    }
    }

    public function delete(Note $note) {
        $note->delete();
        session()->flash('status', 'Note successfully deleted');
        return $this->redirect(route('notebag.mynotes'));
    }
    public function render()
    {
        $note = $this->note;
        return view('livewire.show-note', compact('note'));
    }
}
