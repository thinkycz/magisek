@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    <div class="container mx-auto py-6">
        <div class="flex space-x-8">
            <div class="w-64">
                @include('client.partials.sidebar')
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    @include('client.partials.footer')
@endsection
