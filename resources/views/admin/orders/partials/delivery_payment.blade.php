@php
    $deliveries = \App\Models\DeliveryMethod::where('enabled', true)->get();
    $payments = \App\Models\PaymentMethod::where('enabled', true)->get();
@endphp

<x-accordion :title="__('orders.delivery_payment')" class="mt-8">
    <x-form :action="route('acp.orders.update-delivery-payment', $order)">
        <div class="p-4 space-y-4">
            <x-select name="delivery_method_id" title="{{ __('orders.delivery_method') }}" :options="$deliveries"
                      :value="$order->delivery_method_id"></x-select>

            <x-select name="payment_method_id" title="{{ __('orders.payment_method') }}" :options="$payments"
                      :value="$order->payment_method_id"></x-select>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
