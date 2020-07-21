<div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Delivery Method
            </h3>
            <div class="mt-5">
                <fieldset class="space-y-4">
                    @foreach($deliveryMethods as $deliveryMethod)
                        <div class="flex items-center">
                            <input id="delivery_method[{{ $deliveryMethod->id }}]"
                                   value="{{ $deliveryMethod->id }}"
                                   name="delivery_method"
                                   type="radio"
                                   wire:model="selectedDelivery"
                                   class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            <label for="delivery_method[{{ $deliveryMethod->id }}]" class="ml-3">
                                <span class="block text-sm leading-5 font-medium text-gray-700">{{ $deliveryMethod->name }}</span>
                            </label>
                        </div>
                    @endforeach
                </fieldset>
            </div>
        </div>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Payment Method
            </h3>
            <div class="mt-5">
                @forelse($paymentMethods as $paymentMethod)
                    <div class="flex items-center">
                        <input id="payment_method[{{ $paymentMethod->id }}]"
                               value="{{ $paymentMethod->id }}"
                               name="payment_method"
                               type="radio"
                               class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                        <label for="payment_method[{{ $paymentMethod->id }}]" class="ml-3">
                            <span class="block text-sm leading-5 font-medium text-gray-700">{{ $paymentMethod->name }}</span>
                        </label>
                    </div>
                @empty
                    <p class="text-center py-2 font-semibold text-sm text-orange-600">Please select delivery method</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
