@extends('client.layout')

@section('content')
    <div class="space-y-4 flex-1">
        <h2 class="text-2xl text-gray-700 font-semibold">
            {{ $category->name }}
        </h2>

        @includeWhen($category->children->isNotEmpty(), 'client.categories.partials.subcategories')

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3">
            @foreach($products as $product)
                <livewire:product-card :product="$product"></livewire:product-card>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
