@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Products
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button :href="route('acp.products.edit', $product)" class="bg-indigo-600 hover:bg-indigo-500">
                <x-icons.plus class="w-4 h-4 mr-2"></x-icons.plus>
                Edit Product
            </x-button>
        </div>
    </div>
@endsection
