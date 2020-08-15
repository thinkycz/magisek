<x-accordion :title="__('orders.billing_details')" class="mt-8">
    <x-form :action="route('acp.orders.update-billing', $order)">
        <div class="p-4 space-y-4">
            <x-input name="company_name" :title="__('global.company_name')" :value="$order->billingDetail->company_name"></x-input>

            <x-input name="first_name" :title="__('global.first_name')" :value="$order->billingDetail->first_name" :required="true"></x-input>

            <x-input name="last_name" :title="__('global.last_name')" :value="$order->billingDetail->last_name" :required="true"></x-input>

            <x-input name="street" :title="__('global.street')" :value="$order->billingDetail->street" :required="true"></x-input>

            <x-input name="city" :title="__('global.city')" :value="$order->billingDetail->city" :required="true"></x-input>

            <x-input name="zipcode" :title="__('global.zip_code')" :value="$order->billingDetail->zipcode" :required="true"></x-input>

            <x-select-country name="country_id" :title="__('global.country')" :value="$order->billingDetail->country_id" :required="true"></x-select-country>

            <x-input name="company_id" :title="__('global.company_id')" :value="$order->billingDetail->company_id" :required="true"></x-input>

            <x-input name="vat_id" :title="__('global.vat_id')" :value="$order->billingDetail->vat_id"></x-input>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
