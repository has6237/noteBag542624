<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class EditNote extends Component
{
    public $note;
    public $title;
    public $content;

    protected function rules(): array 
    {
        return[
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ];
    }

    protected array $messages = [
        'title.required' => 'Title is required',
        'title.max' => 'Title should be not more than 255 characters',

        'content.required' => 'Content is required',
    ];

    public function mount(Note $note) {
        $this->note = $note;
        $this->title = $note->title;
        $this->content = $note->content;
    }

    public function update() {
        $this->validate();

        $this->note->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset([
            'title',
            'content',
        ]);

        session()->flash('status', 'Note successfully updated');

        return $this->redirect(route('notebag.shownote', $this->note));


    }
    public function render()
    {
        return view('livewire.edit-note');
    }
}
