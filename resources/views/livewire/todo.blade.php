<div class=" flex border-black rounded-b">
    <div x-data="{ open: false }">
        <h2 class="leading-2 px-5 py-5 align-middle font-bold"> Add New Todo</h2>
        <button @click="open = true" type="button"
                class="inline-flex items-end gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <x-heroicon-m-plus class="-ml-0.5 h-5 w-5"></x-heroicon-m-plus>
        </button>
        <div x-show="open" @click.outside="open = false" class="flex items-center ">
            <label for="title" class="">New Todo Title</label>
            <input  id="title" type="text" wire:model="title" class="border-black border-1 px-5 py-5 align-middle font-bold"
                   placeholder="Play NFS Underground">
            <label for="description" class="">New Todo Description</label>
            <input  id="description" type="text" wire:model="description" class="border-black border-1 px-5 py-5 align-middle font-bold"
                   placeholder="Level up that whip speedy">
            <button type="button" wire:click="addTodo"
                    class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-heroicon-o-plus-circle class="-ml-0.5 h-5 w-5"></x-heroicon-o-plus-circle>
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

