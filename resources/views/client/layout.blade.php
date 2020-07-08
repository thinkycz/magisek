@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    @section('container')
        <div class="container mx-auto py-6">
            <div class="flex space-x-8">
                <div class="w-64 flex-shrink-0">
                    @include('client.partials.sidebar')
                </div>

                @yield('content')
            </div>
        </div>
    @show

    @include('client.partials.footer')
@endsection
