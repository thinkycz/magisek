@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        <div class="px-4 py-8 bg-white rounded border border-gray-200 space-y-8">
            <h3 class="text-center font-semibold text-xl text-gray-700">Thank you for your order!</h3>

            <p class="text-center text-gray-700">Your order has been placed. Your order number is {{ $order->order_number }}</p>

            <div class="flex justify-center">
                <x-button :href="route('orders.show', $order)" class="bg-teal-600 hover:bg-teal-500">Show order</x-button>
            </div>
        </div>
    </div>
@endsection
