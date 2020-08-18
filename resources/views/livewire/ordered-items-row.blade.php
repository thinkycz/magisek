<tr>
    @if($editing)
        <td class="px-6 py-4" colspan="100%">
            <form wire:submit.prevent="updateItem" class="space-y-4">
                <x-input title="Product Name" wire:model="productName"></x-input>

                <div class="flex space-x-4">
                    <x-input title="Catalog" wire:model="catalog" class="flex-1"></x-input>

                    <x-input title="Barcode" wire:model="barcode" class="flex-1"></x-input>
                </div>

                <div class="flex space-x-4">
                    <x-input type="number" title="Quantity" wire:model="quantity" class="flex-1"></x-input>

                    <x-input type="number" title="Price" wire:model="price" class="flex-1"></x-input>
                </div>

                <x-button class="bg-teal-600 hover:bg-teal-500">Update Item</x-button>
            </form>
        </td>
    @else
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
            <a href="{{ $orderedItem->product ? route('products.show', $orderedItem->product) : '#' }}"
               class="font-medium text-teal-700 hover:underline">
                {{ $orderedItem->name }}
            </a>
            @if($orderedItem->barcode)
                <p class="text-xs text-gray-600">EAN {{ $orderedItem->barcode }}</p>
            @elseif($orderedItem->catalog)
                <p class="text-xs text-gray-600">CAT {{ $orderedItem->catalog }}</p>
            @endif
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
            {{ $orderedItem->quantity }}
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
            {{ $orderedItem->formatted_price }}
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
            {{ $orderedItem->formatted_total_price }}
        </td>
        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
            <x-button wire:click="editItem">
                <x-icons.pencil class="w-4 h-4 text-blue-600 hover:text-blue-500"></x-icons.pencil>
            </x-button>
            <x-button wire:click="removeItem">
                <x-icons.trash class="w-4 h-4 text-red-600 hover:text-red-500"></x-icons.trash>
            </x-button>
        </td>
    @endif
</tr>
