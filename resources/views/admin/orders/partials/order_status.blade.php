@php
    $statuses = \App\Models\Status::all();
@endphp

<x-accordion :title="__('orders.order_status')" class="mt-8">
    <x-form :action="route('acp.orders.update-status', $order)">
        <div class="p-4 space-y-4">
            <x-select name="status_id" title="{{ __('orders.order_status') }}" :options="$statuses"
                      :value="$order->status_id"></x-select>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
