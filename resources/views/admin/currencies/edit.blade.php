@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Currencies
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($currency->exists)
                <x-button :href="route('acp.currencies.create')" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    Delete Currency
                </x-button>
            @endif
        </div>
    </div>

    <x-form :method="$currency->exists ? 'PUT' : 'POST'" :action="$currency->exists ? route('acp.currencies.update', $currency) : route('acp.currencies.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Currency
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Please enter details.
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                            Name
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name" name="name" class="form-input block w-full sm:text-sm sm:leading-5"
                                   value="{{ old('name', $currency->name) }}"/>
                        </div>
                        @error('name')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="isocode" class="block text-sm font-medium leading-5 text-gray-700">
                            ISO Code
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="isocode" name="isocode" class="form-input block w-full sm:text-sm sm:leading-5"
                                   value="{{ old('isocode', $currency->isocode) }}"/>
                        </div>
                        @error('isocode')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="symbol" class="block text-sm font-medium leading-5 text-gray-700">
                            Symbol
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="symbol" name="symbol" class="form-input block w-full sm:text-sm sm:leading-5"
                                   value="{{ old('symbol', $currency->symbol) }}"/>
                        </div>
                        @error('symbol')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="exchange_rate" class="block text-sm font-medium leading-5 text-gray-700">
                            Exchange Rate
                        </label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number"
                                   step="0.01"
                                   id="exchange_rate"
                                   name="exchange_rate"
                                   class="form-input block w-full sm:text-sm sm:leading-5"
                                   value="{{ old('exchange_rate', $currency->exchange_rate) }}"/>
                        </div>
                        @error('exchange_rate')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <div class="flex items-start">
                            <div class="absolute flex items-center h-5">
                                <input type="hidden" name="symbol_is_before" value="0"/>
                                <input id="symbol_is_before"
                                       name="symbol_is_before"
                                       type="checkbox"
                                       value="1"
                                       {{ $currency->symbol_is_before ? 'checked' : '' }}
                                       class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            </div>
                            <div class="pl-7 text-sm leading-5">
                                <label for="symbol_is_before" class="font-medium text-gray-700">
                                    Symbol is before
                                </label>
                            </div>
                        </div>
                        @error('symbol_is_before')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <div class="flex items-start">
                            <div class="absolute flex items-center h-5">
                                <input type="hidden" name="enabled" value="0"/>
                                <input id="enabled"
                                       name="enabled"
                                       type="checkbox"
                                       value="1"
                                       {{ $currency->enabled ? 'checked' : '' }}
                                       class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                            </div>
                            <div class="pl-7 text-sm leading-5">
                                <label for="enabled" class="font-medium text-gray-700">
                                    Enabled
                                </label>
                            </div>
                        </div>
                        @error('symbol_is_before')
                        <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button>Save</x-button>
        </div>
    </x-form>
@endsection
