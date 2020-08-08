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
                            {{ __('global.settings') }}
                        </h2>

                        <div x-data="{ isExpanded: {{ request()->routeIs('acp.delivery-methods.*') || request()->routeIs('acp.payment-methods.*') || request()->routeIs('acp.price-levels.*') || request()->routeIs('acp.preferences.*') || request()->routeIs('acp.settings.*') ? 'true' : 'false' }} }">
                            <button @click.prevent="isExpanded = !isExpanded"
                                    :class="{'bg-gray-900': isExpanded}"
                                    class="mt-1 group w-full flex items-center pl-2 pr-1 py-2 text-sm leading-5 focus:outline-none font-medium rounded-md text-white hover:bg-gray-700 transition ease-in-out duration-150">
                                <x-icons.cog
                                    class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.cog>
                                    {{ __('global.configuration') }}
                                <svg :class="{'text-gray-400 rotate-90': isExpanded, 'text-gray-300': !isExpanded}"
                                     class="ml-auto h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150" viewBox="0 0 20 20">
                                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                                </svg>
                            </button>

                            <div x-show="isExpanded"
                                 class="mt-1 space-y-1"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0 scale-95 -translate-y-4"
                                 x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                                 x-transition:leave-end="transform opacity-0 scale-95 -translate-y-4">

                                <a href="{{ route('acp.delivery-methods.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.delivery-methods.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.delivery_methods') }}
                                </a>
                                <a href="{{ route('acp.payment-methods.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.payment-methods.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.payment_methods') }}
                                </a>
                                <a href="{{ route('acp.price-levels.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.price-levels.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.price_levels') }}
                                </a>
                                <a href="{{ route('acp.preferences.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.preferences.*') ? 'bg-gray-900' : 'text-gray-300' }}" >
                                    {{ __('global.preferences') }}
                                </a>
                                <a href="{{ route('acp.settings.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.settings.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.settings') }}
                                </a>
                            </div>
                        </div>

                        <div x-data="{ isExpanded: {{ request()->routeIs('acp.availabilities.*') || request()->routeIs('acp.countries.*') || request()->routeIs('acp.currencies.*') || request()->routeIs('acp.property-types.*') || request()->routeIs('acp.statuses.*') || request()->routeIs('acp.units.*') ? 'true' : 'false' }} }">

                            <button @click.prevent="isExpanded = !isExpanded"
                                    :class="{'bg-gray-900': isExpanded}"
                                    class="mt-1 group w-full flex items-center pl-2 pr-1 py-2 text-sm leading-5 focus:outline-none font-medium rounded-md text-white hover:bg-gray-700 transition ease-in-out duration-150">
                                <x-icons.flag
                                    class="mr-3 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"></x-icons.flag>
                                {{ __('global.options') }}
                                <svg :class="{'text-gray-400 rotate-90': isExpanded, 'text-gray-300': !isExpanded}"
                                     class="ml-auto h-5 w-5 transform group-hover:text-gray-400 group-focus:text-gray-400 transition-colors ease-in-out duration-150" viewBox="0 0 20 20">
                                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor" />
                                </svg>
                            </button>

                            <div x-show="isExpanded"
                                 class="mt-1 space-y-1"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="transform opacity-0 scale-95 -translate-y-4"
                                 x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                                 x-transition:leave-end="transform opacity-0 scale-95 -translate-y-4">

                                <a href="{{ route('acp.availabilities.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.availabilities.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.availabilities') }}
                                </a>
                                <a href="{{ route('acp.countries.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.countries.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.countries') }}
                                </a>
                                <a href="{{ route('acp.currencies.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.currencies.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.currencies') }}
                                </a>
                                <a href="{{ route('acp.property-types.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.property-types.*') ? 'bg-gray-900' : 'text-gray-300' }}" >
                                    {{ __('global.property_types') }}
                                </a>
                                <a href="{{ route('acp.statuses.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.statuses.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.order_statuses') }}
                                </a>
                                <a href="{{ route('acp.units.index') }}" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm leading-5 font-medium text-white rounded-md hover:text-gray-300 hover:bg-gray-700 transition ease-in-out duration-150 {{ request()->routeIs('acp.units.*') ? 'bg-gray-900' : 'text-gray-300' }}">
                                    {{ __('global.units') }}
                                </a>
                            </div>
                        </div>
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
