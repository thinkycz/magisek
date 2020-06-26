@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Availabilities
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($availability->exists)
                <x-form-button method="delete" :action="route('acp.availabilities.destroy', $availability)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    Delete Availability
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$availability->exists ? 'PUT' : 'POST'" :action="$availability->exists ? route('acp.availabilities.update', $availability) : route('acp.availabilities.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Availability
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Please enter details.
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="name" title="Name" :value="$availability->name"></x-input>

                    <x-input name="description" title="Description" :value="$availability->description" class="mt-6"></x-input>

                    <x-checkbox name="allow_orders" title="Allow Orders" :value="$availability->allow_orders" class="mt-6"></x-checkbox>

                    <x-checkbox name="allow_negative_quantity" title="Allow Negative Quantity" :value="$availability->allow_negative_quantity" class="mt-6"></x-checkbox>

                    <x-checkbox name="products_visible" title="Products Visible" :value="$availability->products_visible" class="mt-6"></x-checkbox>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button class="bg-indigo-600 hover:bg-indigo-500">Save</x-button>
        </div>
    </x-form>
@endsection
