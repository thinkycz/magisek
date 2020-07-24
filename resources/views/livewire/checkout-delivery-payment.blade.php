<div class="space-y-4">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Delivery Method
            </h3>
            <div class="mt-5">
                <fieldset class="space-y-4">
                    @foreach($deliveryMethods as $deliveryMethod)
                        <x-radio name="delivery_method_id"
                                 :title="$deliveryMethod->name"
                                 :value="$deliveryMethod->id"
                                 wire:model="selectedDelivery">
                        </x-radio>
                    @endforeach
                </fieldset>

                @error('delivery_method_id')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Payment Method
            </h3>
            <div class="mt-5">
                <fieldset class="space-y-4">
                    @forelse($paymentMethods as $paymentMethod)
                        <x-radio name="payment_method_id"
                                 :title="$paymentMethod->name"
                                 :value="$paymentMethod->id"
                                 wire:model="selectedPayment">
                        </x-radio>
                    @empty
                        <p class="text-center py-2 font-semibold text-sm text-orange-600">Please select delivery
                            method</p>
                    @endforelse
                </fieldset>

                @error('payment_method_id')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
</div>
