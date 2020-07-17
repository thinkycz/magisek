@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Google Sheets
            </h2>
        </div>
    </div>

    <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Google Sheets Sync
                </h3>
                <p class="mt-1 text-sm leading-5 text-gray-500">
                    Please make sure the Google Sheets URL is configured before syncing.
                </p>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                asd
            </div>
        </div>
    </div>
@endsection
