@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('order_statuses.order_statuses') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($status->exists)
                <x-form-button method="delete" :action="route('acp.statuses.destroy', $status)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    {{ __('order_statuses.delete_status') }}
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$status->exists ? 'PUT' : 'POST'" :action="$status->exists ? route('acp.statuses.update', $status) : route('acp.statuses.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('order_statuses.order_status') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.please_enter_details') }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="name" :title="__('order_statuses.name')" :value="$status->name"></x-input>

                    <x-input name="description" :title="__('order_statuses.description')" :value="$status->description" class="mt-6"></x-input>

                    <x-input type="color" name="color" :title="__('order_statuses.color')" :value="$status->color" class="mt-6"></x-input>

                    <x-checkbox name="is_final" :title="__('order_statuses.is_final')" :value="$status->is_final" class="mt-6"></x-checkbox>
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
