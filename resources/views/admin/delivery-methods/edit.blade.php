@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('delivery_methods.delivery_methods') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($deliveryMethod->exists)
                <x-form-button method="delete" :action="route('acp.delivery-methods.destroy', $deliveryMethod)"
                               class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    {{ __('delivery_methods.delete_delivery_method') }}
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$deliveryMethod->exists ? 'PUT' : 'POST'"
            :action="$deliveryMethod->exists ? route('acp.delivery-methods.update', $deliveryMethod) : route('acp.delivery-methods.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('delivery_methods.delivery_method') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.please_enter_details') }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="name" title="{{ __('delivery_methods.name') }}" :value="$deliveryMethod->name"></x-input>

                    <x-input type="number" name="price" title="{{ __('delivery_methods.price') }}" :value="$deliveryMethod->price"
                             class="mt-6"></x-input>

                    <x-input type="number" name="mov" title="{{ __('delivery_methods.minimum_order') }}" :value="$deliveryMethod->mov" class="mt-6"></x-input>

                    <x-input type="number" name="position" title="{{ __('delivery_methods.position') }}" :value="$deliveryMethod->position" class="mt-6"></x-input>

                    <x-checkbox name="needs_shipping_address" title="{{ __('delivery_methods.needs_shipping_address') }}"
                                :value="$deliveryMethod->needs_shipping_address" class="mt-6"></x-checkbox>

                    <x-checkbox name="price_will_be_calculated" title="{{ __('delivery_methods.price_will_be_calculated') }}"
                                :value="$deliveryMethod->price_will_be_calculated" class="mt-6"></x-checkbox>

                    <x-checkbox name="enabled" title="{{ __('delivery_methods.enabled') }}" :value="$deliveryMethod->enabled"
                                class="mt-6"></x-checkbox>

                    @if($paymentMethods->isNotEmpty())
                        <div class="block text-sm font-medium leading-5 text-gray-700 my-6">
                            {{ __('delivery_methods.payment_methods') }}
                        </div>

                        @foreach($paymentMethods as $paymentMethod)
                            <x-checkbox name="payment_methods[{{ $paymentMethod->id }}]" :title="$paymentMethod->name"
                                        :value="$deliveryMethod->paymentMethods->contains($paymentMethod)"
                                        class="mb-6"></x-checkbox>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button class="bg-teal-600 hover:bg-teal-500">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
@endsection
