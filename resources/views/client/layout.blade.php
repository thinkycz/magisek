@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    <div class="px-4 sm:px-0 bg-cool-gray-50">
        @section('container')
            <div class="container mx-auto py-6">
                <div class="flex md:space-x-8">
                    <div class="w-64 flex-shrink-0 hidden md:block">
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
