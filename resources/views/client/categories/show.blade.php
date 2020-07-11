@extends('client.layout')

@section('content')
    <div class="space-y-4 flex-1">
        <h2 class="text-2xl text-gray-700 font-semibold">
            {{ $category->name }}
        </h2>

        <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3">
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
            <livewire:product-card></livewire:product-card>
        </ul>
    </div>
@endsection
