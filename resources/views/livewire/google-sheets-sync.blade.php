<div wire:poll class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
    <div class="lg:flex justify-between space-y-4 lg:space-y-0 mb-8">
        <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                {{ __('google_sheets.google_sheets_sync') }}
            </h3>
            <p class="mt-1 text-sm leading-5 text-gray-500">
                {{ __('google_sheets.google_sheets_sync_sub') }}
            </p>
        </div>

        <x-button wire:click="sync" class="{{ $status->running() ? 'bg-gray-500' : 'bg-teal-600 hover:bg-teal-500 ' }}">
            <x-icons.refresh class="w-4 h-4 mr-2"></x-icons.refresh>
            {{ __('google_sheets.sync_now') }}
        </x-button>
    </div>

    <dl class="mt-5 space-y-8">
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-center">
            <dt class="text-sm leading-5 font-medium text-gray-500">
                {{ __('google_sheets.last_update') }}
            </dt>
            <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $status->lastUpdate() }}
            </dd>
        </div>
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-center">
            <dt class="text-sm leading-5 font-medium text-gray-500">
                {{ __('google_sheets.duration') }}
            </dt>
            <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $status->duration() }}
            </dd>
        </div>
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-center">
            <dt class="text-sm leading-5 font-medium text-gray-500">
                {{ __('google_sheets.status') }}
            </dt>
            <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $status->status() }}
            </dd>
        </div>
    </dl>
</div>
