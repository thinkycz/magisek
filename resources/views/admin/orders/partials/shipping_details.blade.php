<x-accordion :title="__('orders.shipping_details')" class="mt-8">
    <x-form :action="route('acp.orders.update-shipping', $order)">
        <div class="p-4 space-y-4">
            <x-input name="company_name" :title="__('global.company_name')" :value="$order->shippingDetail->company_name"></x-input>

            <x-input name="first_name" :title="__('global.first_name')" :value="$order->shippingDetail->first_name" :required="true"></x-input>

            <x-input name="last_name" :title="__('global.last_name')" :value="$order->shippingDetail->last_name" :required="true"></x-input>

            <x-input name="street" :title="__('global.street')" :value="$order->shippingDetail->street" :required="true"></x-input>

            <x-input name="city" :title="__('global.city')" :value="$order->shippingDetail->city" :required="true"></x-input>

            <x-input name="zipcode" :title="__('global.zip_code')" :value="$order->shippingDetail->zipcode" :required="true"></x-input>

            <x-select-country name="country_id" :title="__('global.country')" :value="$order->shippingDetail->country_id" :required="true"></x-select-country>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
