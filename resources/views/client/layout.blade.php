@extends('layouts.base')

@section('body')
    @include('client.partials.topbar')

    @include('client.partials.header')

    @yield('content')

    @include('client.partials.footer')
@endsection
