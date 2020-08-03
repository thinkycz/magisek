<div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('global.shipping_address') }}
            </h3>
            <div class="mt-5 space-y-4">
                <x-input name="shipping_company_name" :title="__('global.company_name')"></x-input>

                <x-input name="shipping_first_name" :title="__('global.first_name')" :required="true"></x-input>

                <x-input name="shipping_last_name" :title="__('global.last_name')" :required="true"></x-input>

                <x-input name="shipping_street" :title="__('global.street')" :required="true"></x-input>

                <x-input name="shipping_city" :title="__('global.city')" :required="true"></x-input>

                <x-input name="shipping_zipcode" :title="__('global.zip_code')" :required="true"></x-input>

                <x-select-country name="shipping_country_id" :title="__('global.country')" :required="true"></x-select-country>
            </div>
        </div>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('global.billing_address') }}
            </h3>
            <div class="mt-5 space-y-4">
                <x-checkbox name="billing_different"
                            :title="__('global.billing_different')"
                            wire:model="billingDifferent"></x-checkbox>

                <div class="space-y-4">
                    @if($billingDifferent)
                        <x-input name="billing_company_name" :title="__('global.company_name')"></x-input>

                        <x-input name="billing_first_name" :title="__('global.first_name')" :required="true"></x-input>

                        <x-input name="billing_last_name" :title="__('global.last_name')" :required="true"></x-input>

                        <x-input name="billing_street" :title="__('global.street')" :required="true"></x-input>

                        <x-input name="billing_city" :title="__('global.city')" :required="true"></x-input>

                        <x-input name="billing_zipcode" :title="__('global.zip_code')" :required="true"></x-input>

                        <x-select-country name="billing_country_id" :title="__('global.country')" :required="true"></x-select-country>
                    @endif
                </div>

                <x-checkbox name="business_purchase"
                            :title="__('global.business_purchase')"
                            wire:model="businessPurchase"></x-checkbox>

                <div class="space-y-4">
                    @if($businessPurchase)
                        <x-input name="company_id" :title="__('global.company_id')" :required="true"></x-input>

                        <x-input name="vat_id" :title="__('global.vat_id')"></x-input>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
