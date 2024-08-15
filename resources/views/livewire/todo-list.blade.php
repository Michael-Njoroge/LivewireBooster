<div class="flex flex-col w-[300px] mx-auto py-16">
    <div class="flex justify-center gap-4">
        <input
            type="text"
            wire:model="todoText"
            wire:keydown.enter="addTodo"
            name="todo"
            class="flex-1"
            placeholder="Type and hit enter"
        >
        <button
            wire:click="addTodo"
            class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
        >
            Add
        </button>
    </div>
    <div class="py-6">
        @if(count($todos) === 0)
            <p class="text-gray-500 text-center">There are no todos</p>
        @endif

        @foreach($todos as $index => $todo)
            <div class="flex gap-4 justify-between items-center py-3">
                <input
                    wire:change="toggleTodo('{{ $todo->id }}')"
                    type="checkbox"
                    {{$todo->completed ? 'checked' : ''}}
                >
                <label class="flex-1 {{ $todo->completed ? 'line-through' : '' }}">
                    {{ $todo->todo }}
                </label>
                <button
                    wire:click="deleteTodo('{{ $todo->id }}')"
                    class="bg-danger"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.74 9L14.394 18M9.652 18L9.26 9m9.968-3.21a48.108 48.108 0 0 0 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                        />
                    </svg>
                </button>
            </div>
        @endforeach
    </div>
</div>
