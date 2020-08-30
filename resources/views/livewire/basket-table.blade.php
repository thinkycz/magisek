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
                                {{ __('global.product') }}
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('global.price') }}
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('global.quantity') }}
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('global.total') }}
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
                                            <a href="{{ route('products.show', $item->model) }}"
                                               class="text-sm leading-5 font-medium text-gray-900 hover:underline">
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
                                    @if(settingsRepository()->getCompanyIsVatPayer())
                                        <div class="text-xs leading-5 text-gray-500">
                                            {{ showPriceWithCurrency($item->priceNet) }} {{ __('global.excl_vat') }}
                                        </div>
                                    @endif
                                    @if($item->discountRate)
                                        <div class="text-xs leading-5 text-red-600 font-semibold">
                                           {{ __('global.discount') }} {{ showPriceWithCurrency($item->price * ($item->discountRate / 100 * -1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <livewire:update-quantity :item-id="$item->rowId"
                                                              :key="$item->rowId">
                                    </livewire:update-quantity>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ showPriceWithCurrency($item->total) }}
                                    </div>
                                    @if(settingsRepository()->getCompanyIsVatPayer())
                                        <div class="text-xs leading-5 text-gray-500">
                                            {{ showPriceWithCurrency($item->subtotal) }} {{ __('global.excl_vat') }}
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div>
            @if($coupons->isNotEmpty())
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-cool-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('global.coupon_code') }}
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('global.discount') }}
                                </th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <p class="text-sm leading-5 font-medium text-gray-900">
                                            {{ $coupon->name }}
                                        </p>
                                        <p class="text-xs leading-5 text-gray-500">
                                            {{ $coupon->model->description }}
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-red-600 text-sm font-semibold">
                                        {{ $coupon->model->discount }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <livewire:remove-coupon :item-id="$coupon->rowId"
                                                                :key="$coupon->rowId">
                                        </livewire:remove-coupon>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

        <div class="lg:flex justify-between space-y-6 lg:space-y-0">
            <div class="flex-1">
                <livewire:apply-coupon></livewire:apply-coupon>
            </div>

            <div class="w-full lg:w-80 space-y-8">
                <ul class="space-y-2">
                    <li class="flex justify-between text-lg font-semibold">
                        <span class="text-cool-gray-500">{{ __('global.total') }}</span>
                        <span class="text-gray-700">{{ $total }}</span>
                    </li>
                    @if(settingsRepository()->getCompanyIsVatPayer())
                        <li class="flex justify-between text-sm font-semibold">
                            <span class="text-cool-gray-500">{{ __('global.total') }} {{ __('global.excl_vat') }}</span>
                            <span class="text-gray-700">{{ $totalNet }}</span>
                        </li>
                    @endif
                </ul>

                <div class="flex justify-end">
                    <a href="{{ route('checkout.index') }}"
                       class="flex-1 rounded h-12 text-white text-sm font-semibold flex items-center justify-center space-x-2 bg-green-500 hover:bg-green-600">
                        <x-icons.chevron-right class="w-5 h-5"></x-icons.chevron-right>
                        <span>{{ __('global.checkout') }}</span>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="px-4 py-8 space-y-6 bg-white rounded border border-gray-200">
            <x-icons.emoji-sad class="w-12 h-12 mx-auto text-gray-700"></x-icons.emoji-sad>

            <h3 class="text-center font-semibold text-xl text-gray-700">{{ __('global.your_basket_is_empty') }}</h3>

            <p class="text-center text-gray-700">{!! __('global.basket_empty_sub') !!}</p>
        </div>
    @endif
</div>
