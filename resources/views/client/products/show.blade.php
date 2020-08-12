@extends('client.layout')

@section('content')
    <div class="space-y-8">

        <div class="flex w-full space-x-6 p-6 bg-white rounded border border-gray-200">
            <x-gallery :photos="$product->photos"></x-gallery>

            <div class="flex-1 space-y-6">
                <h2 class="text-2xl text-gray-700 font-semibold">
                    {{ $product->name }}
                </h2>

                <p class="text-gray-700 text-sm">
                    {{ $product->description }}
                </p>

                <div class="flex justify-between items-center">
                    <div class="w-1/2">
                        @if($product->old_price)
                            <p class="text-gray-500 text-xs leading-5 line-through">{{ $product->formatted_old_price }}</p>
                        @endif

                        <p class="text-2xl font-semibold text-teal-700">{{ $product->formatted_price }}</p>

                        @if(settingsRepository()->getCompanyIsVatPayer())
                            <p class="text-xs font-semibold text-gray-500">{{ $product->formatted_price_excl_vat }} {{ __('global.excl_vat') }}</p>
                        @endif
                    </div>

                    <div class="w-1/2">
                        <livewire:add-to-basket :product="$product"></livewire:add-to-basket>
                    </div>
                </div>

                <hr>

                <ul>
                    <li class="py-2 flex justify-between text-xs font-semibold">
                        <span class="text-cool-gray-500">{{ __('products.moq') }}</span>
                        <span class="text-gray-700">{{ $product->moq }} {{ $product->unit->abbr }}</span>
                    </li>
                    <li class="py-2 flex justify-between text-xs font-semibold">
                        <span class="text-cool-gray-500">{{ __('products.catalog') }}</span>
                        <span class="text-gray-700">{{ $product->catalog }}</span>
                    </li>
                    <li class="py-2 flex justify-between text-xs font-semibold">
                        <span class="text-cool-gray-500">{{ __('products.barcode') }}</span>
                        <span class="text-gray-700">{{ $product->barcode }}</span>
                    </li>
                    <li class="py-2 flex justify-between text-xs font-semibold">
                        <span class="text-cool-gray-500">{{ __('products.quantity_in_stock') }}</span>
                        <span
                            class="text-gray-700">{{ $product->public_stock_quantity }} {{ $product->unit->abbr }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6 bg-white rounded border border-gray-200 space-y-6">
            <div>
                <div class="sm:hidden">
                    <select aria-label="Selected tab" class="form-select block w-full">
                        <option selected>Product Details</option>
                        {{--                        <option>Properties</option>--}}
                        {{--                        <option>Ratings</option>--}}
                        {{--                        <option>Comments</option>--}}
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex">
                            <a href="#"
                               class="w-1/4 py-4 px-1 text-center border-b-2 border-teal-500 font-medium text-sm leading-5 text-teal-600 focus:outline-none focus:text-teal-800 focus:border-teal-700"
                               aria-current="page">
                                Product Details
                            </a>
                            {{--                            <a href="#"--}}
                            {{--                               class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">--}}
                            {{--                                Properties--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#"--}}
                            {{--                               class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">--}}
                            {{--                                Ratings--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#"--}}
                            {{--                               class="w-1/4 py-4 px-1 text-center border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">--}}
                            {{--                                Comments--}}
                            {{--                            </a>--}}
                        </nav>
                    </div>
                </div>
            </div>

            <div>
                {!! $product->details !!}
            </div>
        </div>
    </div>
@endsection
