<div class="border-black rounded-b">
    <div>
        <h2 class="leading-2 px-5 py-5 align-middle font-bold"> Add New Todo</h2>
        <button type="button"
                class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
           @svg('o-plus-circle', 'h-5 w-5')
        </button>
    </div>
    <ul class="list-disc">
        @foreach($this->todos as $todo)
            <li class="mt-6">
                <div>
                    <input type="checkbox"
                           wire:click="toggleCompleted({{$todo->id}})" {{$todo->completed ? 'checked' : ''}}>
                    <span class="{{$todo->completed ? 'line-through' : ''}}">{{$todo->title}}</span>
                    <button type="button" class="rounded text-red-700" wire:click="delete({{$todo->id}})">Delete
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</div>

