<div class="flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full overflow-hidden border-b border-cool-gray-200">
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                        {{ __('orders.product') }}
                    </th>
                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                        {{ __('orders.quantity') }}
                    </th>
                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                        {{ __('orders.price') }}
                    </th>
                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                        {{ __('orders.total') }}
                    </th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-cool-gray-200">
                @foreach($orderedItems as $orderedItem)
                    <tr>
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
                            <x-button wire:click="removeItem({{ $orderedItem->id }})">
                                <x-icons.trash class="w-4 h-4 text-red-600 hover:text-red-500"></x-icons.trash>
                            </x-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4">
        <form wire:submit.prevent="addItem" class="space-y-4">
            <x-input title="Product Name" wire:model="productName"></x-input>

            <div class="flex space-x-4">
                <x-input title="Catalog" wire:model="catalog" class="flex-1"></x-input>

                <x-input title="Barcode" wire:model="barcode" class="flex-1"></x-input>
            </div>

            <div class="flex space-x-4">
                <x-input type="number" title="Quantity" wire:model="quantity" class="flex-1"></x-input>

                <x-input type="number" title="Price" wire:model="price" class="flex-1"></x-input>
            </div>

            <x-button class="bg-teal-600 hover:bg-teal-500">Add Item</x-button>
        </form>
    </div>
</div>
