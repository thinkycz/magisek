@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Google Sheets
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button :href="route('acp.google-sheets.configure')" class="bg-yellow-500 hover:bg-yellow-400">
                <x-icons.cog class="w-4 h-4 mr-2"></x-icons.cog>
                Configure
            </x-button>
        </div>
    </div>

    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
        <div class="flex justify-between">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Google Sheets Sync
                </h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Please make sure the Google Sheets URL is configured before syncing.
                </p>
            </div>

            <x-form-button :action="route('acp.google-sheets.sync-now')" class="bg-teal-600 hover:bg-teal-500">
                <x-icons.refresh class="w-4 h-4 mr-2"></x-icons.refresh>
                Sync Now
            </x-form-button>
        </div>

        <dl class="mt-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Poslední aktualizace
                </dt>
                <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    4.11.2019 03:00
                </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Trvání
                </dt>
                <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    1 sekunda
                </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    Stav
                </dt>
                <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    Úspěch
                </dd>
            </div>
        </dl>
    </div>
@endsection
