@extends('layouts.base')

@section('body')
    <div x-data="{open: false}" class="h-screen flex overflow-hidden bg-gray-100">
        @include('admin.partials.mobile_menu')

        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <a href="{{ route('home') }}" class="flex items-center flex-shrink-0 px-4">
                        <x-logo class="w-auto h-8 mx-auto text-teal-600"/>
                    </a>

                    <nav class="mt-8 flex-1 px-2 bg-gray-800">
                        <a href="{{ route('acp.dashboard') }}"
                           class="group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.dashboard') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.home
                                class="mr-3 h-6 w-6 text-gray-300 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.home>
                            {{ __('global.dashboard') }}
                        </a>

                        <h2 class="ml-2 mt-8 mb-4 text-xs text-gray-200 font-semibold uppercase tracking-wide">
                            {{ __('global.my_store') }}
                        </h2>

                        <a href="{{ route('acp.users.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.users.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.users
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.users>
                            {{ __('global.customers') }}
                        </a>
                        <a href="{{ route('acp.categories.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.categories.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.folder
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.folder>
                            {{ __('global.categories') }}
                        </a>
                        <a href="{{ route('acp.products.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.products.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.view-grid
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.view-grid>
                            {{ __('global.products') }}
                        </a>
                        <a href="{{ route('acp.orders.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.orders.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.shopping-cart
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.shopping-cart>
                            {{ __('global.orders') }}
                        </a>
                        <a href="{{ route('acp.pages.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.pages.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.document
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.document>
                            {{ __('global.pages') }}
                        </a>

                        <h2 class="ml-2 mt-8 mb-4 text-xs text-gray-200 font-semibold uppercase tracking-wide">
                            {{ __('global.product_import') }}
                        </h2>

                        <a href="{{ route('acp.google-sheets.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.google-sheets.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.view-boards
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.view-boards>
                            {{ __('global.google_sheets') }}
                        </a>

                        <h2 class="ml-2 mt-8 mb-4 text-xs text-gray-200 font-semibold uppercase tracking-wide">
                            {{ __('global.configuration') }}
                        </h2>

                        <a href="{{ route('acp.delivery-methods.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.delivery-methods.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.collection
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.collection>
                            {{ __('global.delivery_methods') }}
                        </a>
                        <a href="{{ route('acp.payment-methods.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.payment-methods.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.credit-card
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.credit-card>
                            {{ __('global.payment_methods') }}
                        </a>
                        <a href="{{ route('acp.price-levels.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.price-levels.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.chart-bar
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.chart-bar>
                            {{ __('global.price_levels') }}
                        </a>
                        <a href="{{ route('acp.preferences.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.preferences.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.duplicate
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.duplicate>
                            {{ __('global.preferences') }}
                        </a>
                        <a href="{{ route('acp.settings.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.settings.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.cog
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.cog>
                            {{ __('global.settings') }}
                        </a>

                        <h2 class="ml-2 mt-8 mb-4 text-xs text-gray-200 font-semibold uppercase tracking-wide">
                            {{ __('global.options') }}
                        </h2>

                        <a href="{{ route('acp.availabilities.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.availabilities.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.check-circle
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.check-circle>
                            {{ __('global.availabilities') }}
                        </a>
                        <a href="{{ route('acp.countries.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.countries.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.globe
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.globe>
                            {{ __('global.countries') }}
                        </a>
                        <a href="{{ route('acp.currencies.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.currencies.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.currency-euro
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.currency-euro>
                            {{ __('global.currencies') }}
                        </a>
                        <a href="{{ route('acp.property-types.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.property-types.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.flag
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.flag>
                            {{ __('global.property_types') }}
                        </a>
                        <a href="{{ route('acp.statuses.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.statuses.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.cursor-click
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.cursor-click>
                            {{ __('global.order_statuses') }}
                        </a>
                        <a href="{{ route('acp.units.index') }}"
                           class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.units.*') ? 'text-white bg-gray-900' : 'text-gray-300' }}">
                            <x-icons.scale
                                class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.scale>
                            {{ __('global.units') }}
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex bg-gray-700 p-4">
                    <a href="#" class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <div>
                                <img class="inline-block h-9 w-9 rounded-full"
                                     src="{{ auth()->user()->avatar }}"
                                     alt="{{ auth()->user()->name }}"/>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-white">
                                    {{ auth()->user()->name }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button @click="open = true"
                        class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
                        aria-label="Open sidebar">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto pt-2 pb-6 focus:outline-none md:py-6" tabindex="0">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
@endsection
