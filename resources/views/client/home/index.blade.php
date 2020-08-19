@extends('client.layout')

@section('content')
    <div class="flex flex-col">
        <x-banners></x-banners>

        <x-featured-products></x-featured-products>
    </div>
@endsection

@section('subcontent')
    <x-from-the-blog></x-from-the-blog>
@endsection
