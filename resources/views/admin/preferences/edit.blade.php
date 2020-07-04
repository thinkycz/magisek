@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Preferences
            </h2>
        </div>
    </div>

    <x-form method="PUT" :action="route('acp.preferences.update', $preference)">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ $preference->name }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ $preference->description }}
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-select name="value" title="Value" :value="$preference->preferable->id" :options="$options"></x-select>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button class="bg-indigo-600 hover:bg-indigo-500">Save</x-button>
        </div>
    </x-form>
@endsection
