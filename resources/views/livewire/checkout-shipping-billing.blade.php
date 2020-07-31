<div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Shipping Address
            </h3>
            <div class="mt-5 space-y-4">
                <x-input name="shipping_company_name" title="Company name"></x-input>

                <x-input name="shipping_first_name" title="First name" :required="true"></x-input>

                <x-input name="shipping_last_name" title="Last name" :required="true"></x-input>

                <x-input name="shipping_street" title="Street" :required="true"></x-input>

                <x-input name="shipping_city" title="City" :required="true"></x-input>

                <x-input name="shipping_zipcode" title="Zip Code" :required="true"></x-input>

                <x-select-country name="shipping_country_id" title="Country" :required="true"></x-select-country>
            </div>
        </div>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Billing Address
            </h3>
            <div class="mt-5 space-y-4">
                <x-checkbox name="billing_different" title="Billing address is different from shipping address"
                            wire:model="billingDifferent"></x-checkbox>

                <div class="space-y-4">
                    @if($billingDifferent)
                        <x-input name="billing_company_name" title="Company name"></x-input>

                        <x-input name="billing_first_name" title="First name" :required="true"></x-input>

                        <x-input name="billing_last_name" title="Last name" :required="true"></x-input>

                        <x-input name="billing_street" title="Street" :required="true"></x-input>

                        <x-input name="billing_city" title="City" :required="true"></x-input>

                        <x-input name="billing_zipcode" title="Zip Code" :required="true"></x-input>

                        <x-select-country name="billing_country_id" title="Country" :required="true"></x-select-country>
                    @endif
                </div>

                <x-checkbox name="business_purchase" title="This is a business purchase"
                            wire:model="businessPurchase"></x-checkbox>

                <div class="space-y-4">
                    @if($businessPurchase)
                        <x-input name="company_id" title="Company ID" :required="true"></x-input>

                        <x-input name="vat_id" title="VAT ID"></x-input>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
