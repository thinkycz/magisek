<div class="flex shadow rounded">
        <input type="text" class="flex-1 rounded-l text-center text-sm w-12 border focus:outline-none" wire:model="quantity" wire:change="change">
        <div class="flex flex-col border border-l-0 rounded-r">
            <button class="px-2 text-xs border-b hover:bg-gray-200 focus:outline-none" wire:click="increment">+</button>
            <button class="px-2 text-xs hover:bg-gray-200 focus:outline-none" wire:click="decrement">-</button>
        </div>
</div>
