@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('coupons.coupons') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($coupon->exists)
                <x-form-button method="delete" :action="route('acp.coupons.destroy', $coupon)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    {{ __('coupons.delete_coupon') }}
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$coupon->exists ? 'PUT' : 'POST'" :action="$coupon->exists ? route('acp.coupons.update', $coupon) : route('acp.coupons.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('coupons.coupon') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.please_enter_details') }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2 space-y-6">
                    <x-input name="code" :title=" __('coupons.code')" :value="$coupon->code"></x-input>

                    <x-input name="description" :title=" __('coupons.description')" :value="$coupon->description"></x-input>

                    <div class="flex space-x-6">
                        <x-input type="number" name="value" :title=" __('coupons.value')" :value="$coupon->value" class="flex-1"></x-input>

                        <x-input type="number" name="max_usage" :title=" __('coupons.max_usage')" :value="$coupon->max_usage" class="flex-1"></x-input>
                    </div>

                    <div class="flex space-x-6">
                        <x-input type="date" name="valid_from" :title=" __('coupons.valid_from')" :value="$coupon->valid_from->format('Y-m-d')" class="flex-1"></x-input>

                        <x-input type="date" name="valid_to" :title=" __('coupons.valid_to')" :value="$coupon->valid_to->format('Y-m-d')" class="flex-1"></x-input>
                    </div>

                    <x-checkbox name="is_percentage" :title="__('coupons.is_percentage')" :value="$coupon->is_percentage"></x-checkbox>

                    <x-checkbox name="once_per_user" :title="__('coupons.once_per_user')" :value="$coupon->once_per_user"></x-checkbox>

                    <x-checkbox name="can_be_combined" :title="__('coupons.can_be_combined')" :value="$coupon->can_be_combined"></x-checkbox>

                    <x-checkbox name="enabled" :title="__('coupons.enabled')" :value="$coupon->enabled"></x-checkbox>
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
