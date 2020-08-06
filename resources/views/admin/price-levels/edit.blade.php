@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('price_levels.price_levels') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($priceLevel->exists)
                <x-form-button method="delete" :action="route('acp.price-levels.destroy', $priceLevel)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    {{ __('price_levels.delete_price_level') }}
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$priceLevel->exists ? 'PUT' : 'POST'" :action="$priceLevel->exists ? route('acp.price-levels.update', $priceLevel) : route('acp.price-levels.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('price_levels.price_level') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.please_enter_details') }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="name" :title="__('price_levels.name')" :value="$priceLevel->name"></x-input>

                    <x-checkbox name="has_quantity_discounts" :title="__('price_levels.has_quantity_discounts')" :value="$priceLevel->has_quantity_discounts" class="mt-6"></x-checkbox>

                    <x-checkbox name="enabled" :title="__('price_levels.enabled')" :value="$priceLevel->enabled" class="mt-6"></x-checkbox>
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
