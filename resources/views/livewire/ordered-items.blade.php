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
                    <livewire:ordered-items-row :orderedItem="$orderedItem"
                                                :key="$orderedItem->id"></livewire:ordered-items-row>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if($adding)
        <div class="p-4">
            <form wire:submit.prevent="storeItem" class="space-y-4">
                <x-input :title="__('orders.product')" wire:model="productName"></x-input>

                <div class="flex space-x-4">
                    <x-input :title="__('orders.catalog')" wire:model="catalog" class="flex-1"></x-input>

                    <x-input :title="__('orders.barcode')" wire:model="barcode" class="flex-1"></x-input>
                </div>

                <div class="flex space-x-4">
                    <x-input type="number" :title="__('orders.quantity')" wire:model="quantity" class="flex-1"></x-input>

                    <x-input type="number" :title="__('orders.price')" wire:model="price" class="flex-1"></x-input>
                </div>

                <x-button class="bg-teal-600 hover:bg-teal-500">
                    {{ __('orders.add_item') }}
                </x-button>

                <x-button wire:click.prevent="$toggle('adding')" class="bg-gray-600 hover:bg-gray-500">
                    {{ __('global.cancel') }}
                </x-button>
            </form>
        </div>
    @else
        <div class="p-4">
            <x-button wire:click="$toggle('adding')" class="bg-teal-600 hover:bg-teal-500">
                <x-icons.plus class="w-4 h-4 mr-2"></x-icons.plus>
                {{ __('orders.add_item') }}
            </x-button>
        </div>
    @endif
</div>
