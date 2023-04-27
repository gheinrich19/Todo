<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{

    public function render()
    {
        return view('livewire.todo');
    }

    public function getTodosProperty()
    {
        return \App\Models\Todo::all();
    }

    public function addTodo()
    {
        $this->validate([
            'title' => 'required|min:6',
            'description' => 'required|min:6',
        ]);

        \App\Models\Todo::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->title = '';
        $this->description = '';
    }

    public function toggleCompleted($todoId)
    {
        $todo = \App\Models\Todo::find($todoId);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function delete($todoId)
    {
        $todo = \App\Models\Todo::find($todoId);
        $todo->delete();
    }
}
