@extends('client.layout')

@section('content')
    <div>
        <h2 class="text-2xl text-gray-700 font-semibold mb-2">
            {{ $category->name }}
        </h2>

        <div class="flex-1 flex justify-evenly flex-wrap">
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
        </div>
    </div>
@endsection
