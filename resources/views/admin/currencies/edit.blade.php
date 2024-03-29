@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('currencies.currencies') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($currency->exists)
                <x-form-button method="delete" :action="route('acp.currencies.destroy', $currency)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    {{ __('currencies.delete_currency') }}
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$currency->exists ? 'PUT' : 'POST'" :action="$currency->exists ? route('acp.currencies.update', $currency) : route('acp.currencies.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('currencies.currency') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.please_enter_details') }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="name" :title=" __('currencies.name')" :value="$currency->name"></x-input>

                    <x-input name="isocode" :title="__('currencies.iso_code')" :value="$currency->isocode" class="mt-6"></x-input>

                    <x-input name="symbol" :title="__('currencies.symbol')" :value="$currency->symbol" class="mt-6"></x-input>

                    <x-input type="number" step="0.01" name="exchange_rate" :title="__('currencies.exchange_rate')" :value="$currency->exchange_rate" class="mt-6"></x-input>

                    <x-checkbox name="symbol_is_before" :title="__('currencies.symbol_is_before')" :value="$currency->symbol_is_before" class="mt-6"></x-checkbox>

                    <x-checkbox name="enabled" :title="__('currencies.enabled')" :value="$currency->enabled" class="mt-6"></x-checkbox>
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
