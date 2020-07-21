<div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Shipping Address
            </h3>
            <div class="mt-5 space-y-4">
                <div>
                    <label for="shipping_company_name" class="block text-sm font-medium leading-5 text-gray-700">
                        Company name</label>
                    <input id="shipping_company_name"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div>
                    <label for="shipping_first_name" class="block text-sm font-medium leading-5 text-gray-700">
                        First name</label>
                    <input id="shipping_first_name"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div>
                    <label for="shipping_last_name" class="block text-sm font-medium leading-5 text-gray-700">
                        Last name</label>
                    <input id="shipping_last_name"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div>
                    <label for="shipping_street" class="block text-sm font-medium leading-5 text-gray-700">
                        Street</label>
                    <input id="shipping_street"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div>
                    <label for="shipping_city" class="block text-sm font-medium leading-5 text-gray-700">
                        City</label>
                    <input id="shipping_city"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div>
                    <label for="shipping_zip_code" class="block text-sm font-medium leading-5 text-gray-700">
                        Zip Code</label>
                    <input id="shipping_zip_code"
                           class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Billing Address
            </h3>
            <div class="mt-5 space-y-4">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="billing_different" type="checkbox"
                               wire:model="billingDifferent"
                               class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    </div>
                    <div class="ml-3 text-sm leading-5">
                        <label for="billing_different" class="font-medium text-gray-700">Billing address is different
                            from shipping address</label>
                    </div>
                </div>

                @if($billingDifferent)
                    <div>
                        <label for="billing_company_name" class="block text-sm font-medium leading-5 text-gray-700">
                            Company name</label>
                        <input id="billing_company_name"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="billing_first_name" class="block text-sm font-medium leading-5 text-gray-700">
                            First name</label>
                        <input id="billing_first_name"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="billing_last_name" class="block text-sm font-medium leading-5 text-gray-700">
                            Last name</label>
                        <input id="billing_last_name"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="billing_street" class="block text-sm font-medium leading-5 text-gray-700">
                            Street</label>
                        <input id="billing_street"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="billing_city" class="block text-sm font-medium leading-5 text-gray-700">
                            City</label>
                        <input id="billing_city"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="billing_zip_code" class="block text-sm font-medium leading-5 text-gray-700">
                            Zip Code</label>
                        <input id="billing_zip_code"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                @endif

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="business_purchase" type="checkbox"
                               wire:model="businessPurchase"
                               class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                    </div>
                    <div class="ml-3 text-sm leading-5">
                        <label for="business_purchase" class="font-medium text-gray-700">
                            This is a business purchase
                        </label>
                    </div>
                </div>

                @if($businessPurchase)
                    <div>
                        <label for="company_id" class="block text-sm font-medium leading-5 text-gray-700">
                            Company ID</label>
                        <input id="company_id"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div>
                        <label for="vat_id" class="block text-sm font-medium leading-5 text-gray-700">
                            VAT ID</label>
                        <input id="vat_id"
                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
