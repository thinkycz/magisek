@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6 space-y-8">
        <h2 class="text-2xl text-gray-700 font-semibold mb-2">
            Search results for "{{ $query }}"
        </h2>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 xl:grid-cols-4">
            @foreach($products as $product)
                <livewire:product-card :product="$product"></livewire:product-card>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
