@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('google_sheets.google_sheets') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button :href="route('acp.google-sheets.configure')" class="bg-yellow-500 hover:bg-yellow-400">
                <x-icons.cog class="w-4 h-4 mr-2"></x-icons.cog>
                {{ __('google_sheets.configure') }}
            </x-button>
        </div>
    </div>

    <livewire:google-sheets-sync></livewire:google-sheets-sync>
@endsection
