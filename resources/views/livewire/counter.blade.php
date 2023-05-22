<div class="p-16 flex justify-center gap-16 items-center text-xl">
    <button wire:click="increment" class="py-5 px-7 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="py-5 px-7 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
</div>
