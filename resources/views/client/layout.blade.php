@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    <div class="px-4 sm:px-0 bg-cool-gray-50">
        @section('container')
            <div class="container mx-auto py-6">
                <div class="flex flex-col md:flex-row md:space-x-8 space-y-8 md:space-y-0">
                    <div class="w-full md:w-64 flex-shrink-0">
                        @include('client.partials.sidebar')
                    </div>

                    @yield('content')
                </div>
            </div>
        @show
    </div>

    @yield('subcontent')

    @include('client.partials.footer')
@endsection
