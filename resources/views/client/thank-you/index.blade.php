@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        <div class="px-4 py-8 bg-white rounded border border-gray-200 space-y-8 flex flex-col items-center">
            <img class="w-48" src="{{ asset('img/elfove.png') }}" alt="Elfove">

            <h3 class="text-center font-semibold text-xl text-gray-700">{{ __('global.thank_you_for_your_order') }}</h3>

            <p class="text-center text-gray-700">{{ __('global.order_has_been_placed') }}</p>

            <p class="text-center text-gray-700">{{ __('global.your_order_number_is', ['orderNumber' => $order->order_number]) }}</p>

            <div class="flex justify-center">
                <x-button :href="route('orders.show', $order)" class="bg-teal-600 hover:bg-teal-500">
                    {{ __('global.show_order') }}
                </x-button>
            </div>
        </div>
    </div>
@endsection
