<div class="flex shadow rounded">
    @if($purchased)
        <button wire:click="purchase"
                class="flex-1 rounded-l h-10 text-white text-xs font-semibold flex items-center justify-center space-x-2 bg-green-500 hover:bg-green-600 focus:outline-none">
            <x-icons.check class="w-5 h-5"></x-icons.check>
            <span>{{ __('global.in_basket') }}</span>
        </button>
        <input type="text" class="text-center text-sm w-12 border focus:outline-none" wire:model="quantity" wire:change="change">
        <div class="flex flex-col border border-l-0 rounded-r">
            <button class="px-2 text-xs border-b hover:bg-gray-200 focus:outline-none" wire:click="increment">+</button>
            <button class="px-2 text-xs hover:bg-gray-200 focus:outline-none" wire:click="decrement">-</button>
        </div>
    @else
        <button wire:click="purchase"
                class="flex-1 rounded h-10 text-white text-xs font-semibold flex items-center justify-center space-x-2 bg-teal-500 hover:bg-teal-600 focus:outline-none">
            <x-icons.shopping-cart class="w-5 h-5"></x-icons.shopping-cart>
            <span>{{ __('global.add_to_basket') }}</span>
        </button>
    @endif
</div>
