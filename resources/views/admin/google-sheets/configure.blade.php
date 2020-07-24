@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Google Sheets Configuration
            </h2>
        </div>
    </div>

    <x-form :action="route('acp.google-sheets.store-configuration')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Google Sheets Configuration
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Please enter details.
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2 space-y-4">
                    <x-input name="link" title="Google Sheets Link" :value="$settings->get('link')"></x-input>

                    <x-radio name="identifier" title="Identify by Catalog Number" value="catalog" :checked="$settings->get('identifier', 'barcode')"></x-radio>

                    <x-radio name="identifier" title="Identify by Barcode" value="barcode" :checked="$settings->get('identifier', 'barcode')"></x-radio>

                    <x-checkbox name="run_daily" title="Run Daily" :value="$settings->get('run_daily', 0)"></x-checkbox>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button class="bg-teal-600 hover:bg-teal-500">Save</x-button>
        </div>
    </x-form>
@endsection
