@extends('client.layout')

@section('content')
    <x-newest-products></x-newest-products>
@endsection

@section('subcontent')
    @include('client.home.partials.blog')
@endsection
