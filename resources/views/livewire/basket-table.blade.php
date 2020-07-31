<div class="space-y-8">
    @if($items->isNotEmpty())
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-cool-gray-200">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Product
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Quantity
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Total
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($items as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded object-contain"
                                                 src="{{ $item->model->thumbnail }}"
                                                 alt="{{ $item->name }}">
                                        </div>
                                        <div class="ml-4">
                                            <a href="{{ route('products.show', $item->model) }}" class="text-sm leading-5 font-medium text-gray-900 hover:underline">
                                                {{ $item->name }}
                                            </a>
                                            <div class="text-xs leading-5 text-gray-500">
                                                {{ $item->model->barcode ? 'EAN ' . $item->model->barcode : 'CAT ' . $item->model->catalog }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ showPriceWithCurrency($item->price) }}
                                    </div>
                                    <div class="text-xs leading-5 text-gray-500">
                                        {{ showPriceWithCurrency($item->priceNet) }} excl. VAT
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <livewire:update-quantity :item-id="$item->rowId" :key="$item->rowId"></livewire:update-quantity>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ showPriceWithCurrency($item->total) }}
                                    </div>
                                    <div class="text-xs leading-5 text-gray-500">
                                        {{ showPriceWithCurrency($item->subtotal) }} excl. VAT
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="lg:flex justify-between">
            <div class="flex-1">

            </div>

            <div class="w-full lg:w-80 space-y-8">
                <ul class="space-y-2">
                    <li class="flex justify-between text-lg font-semibold">
                        <span class="text-cool-gray-500">Total</span>
                        <span class="text-gray-700">{{ $total }}</span>
                    </li>
                    <li class="flex justify-between text-sm font-semibold">
                        <span class="text-cool-gray-500">Total excl. VAT</span>
                        <span class="text-gray-700">{{ $totalNet }}</span>
                    </li>
                </ul>

                <div class="flex justify-end">
                    <a href="{{ route('checkout.index') }}"
                       class="flex-1 rounded h-12 text-white text-sm font-semibold flex items-center justify-center space-x-2 bg-green-500 hover:bg-green-600">
                        <x-icons.chevron-right class="w-5 h-5"></x-icons.chevron-right>
                        <span>Checkout</span>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="p-4 bg-white rounded border border-gray-200">
            <h3 class="text-center py-8 font-semibold text-xl text-gray-700">Your basket is empty</h3>
        </div>
    @endif
</div>
