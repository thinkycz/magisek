<x-accordion :title="__('orders.ordered_items')" class="mt-8">
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
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-cool-gray-200">
                    @foreach($order->orderedItems as $orderedItem)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-teal-700 hover:underline">
                                <a href="{{ route('products.show', $orderedItem->product) }}">{{ $orderedItem->name }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                {{ $orderedItem->quantity }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                {{$orderedItem->formatted_price}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                {{$orderedItem->formatted_total_price}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-accordion>
