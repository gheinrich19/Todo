<div class="border-black rounded-b">
    <div x-data="{ open: false }">
        <h2 class="leading-2 px-5 py-5 align-middle font-bold"> Add New Todo</h2>
        <button @click="open = true" type="button" class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
{{--            <svg class="-ml-0.5 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />--}}
{{--            </svg>--}}
            <x-heroicon-m-plus  class="-ml-0.5 h-5 w-5"></x-heroicon-m-plus>
        </button>
        <div x-show="open" @click.outside="open = false"  class="flex items-center justify-between">
            <input type="text" wire:model="title" class="w-full px-5 py-5 align-middle font-bold" placeholder="Add New Todo">
            <button type="button" wire:click="create" class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-heroicon-o-plus-circle  class="-ml-0.5 h-5 w-5"></x-heroicon-o-plus-circle>
            </button>
    </div>
    <ul class="list-disc">
        @foreach($this->todos as $todo)
            <li class="mt-6">
                <div>
                    <input type="checkbox" wire:click="toggleCompleted({{$todo->id}})" {{$todo->completed ? 'checked' : ''}}>
                    <span class="{{$todo->completed ? 'line-through' : ''}}">{{$todo->title}}</span>
                    <button type="button" class="rounded text-red-700" wire:click="delete({{$todo->id}})">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>

