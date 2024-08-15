<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TodoItem;

class TodoList extends Component {
	public $todos;
	public string $todoText = '';

    public function mount()
    {
        $this->selectTodos()
    }

    public function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at','DESC')->get();
    }

    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->save;
    }
	public function render() {
		return view('livewire.todo-list');
	}
}
