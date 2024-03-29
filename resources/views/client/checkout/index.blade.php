@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6 space-y-8">
        <h2 class="text-2xl text-gray-700 font-semibold mb-2">
            {{ __('global.checkout_page') }}
        </h2>

        <x-form :action="route('checkout.process-order')">
            <div class="md:flex md:space-x-4 space-y-4 md:space-y-0">
                <div class="md:w-1/2">
                    <livewire:checkout-shipping-billing></livewire:checkout-shipping-billing>
                </div>

                <div class="md:w-1/2 space-y-4">
                    <livewire:checkout-contact-notes></livewire:checkout-contact-notes>

                    <livewire:checkout-delivery-payment></livewire:checkout-delivery-payment>
                </div>
            </div>

            <div class="flex justify-between lg:items-center mt-8 flex-col flex-col-reverse lg:flex-row">
                <div class="my-8 lg:my-0">
                    <a href="{{ route('basket.index') }}"
                       class="text-gray-600 text-sm font-semibold flex items-center space-x-2 hover:underline">
                        <x-icons.chevron-left class="w-5 h-5"></x-icons.chevron-left>
                        <span>{{ __('global.back_to_basket') }}</span>
                    </a>
                </div>

                <div class="w-full lg:w-80 space-y-8">
                    <div class="flex justify-end">
                        <button type="submit"
                                class="flex-1 rounded h-12 text-white text-sm font-semibold flex items-center justify-center space-x-2 bg-green-500 hover:bg-green-600">
                            <x-icons.check class="w-5 h-5"></x-icons.check>
                            <span>{{ __('global.place_order') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </x-form>
    </div>
@endsection
