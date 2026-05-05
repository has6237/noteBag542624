<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class CreateNote extends Component
{
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

    public function save() {
        $this->validate();
        Note::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset([
            'title',
            'content',
        ]);

        session()->flash('status', 'Note successfully created');
        $this->redirect(route('notebag.create'));

    }
    public function render()
    {
        return view('livewire.create-note');
    }
}
