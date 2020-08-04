@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        <div class="space-y-4 flex-1">
            <h2 class="text-2xl text-gray-700 font-semibold">
                {{ __('global.all_categories') }}
            </h2>

            <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($categories as $category)
                    <li class="col-span-1 bg-white rounded-lg shadow">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <a href="{{ route('categories.show', $category) }}" class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm leading-5 font-medium truncate hover:underline">{{ $category->name }}</h3>
                                </a>
                                <p class="mt-1 text-gray-500 text-sm leading-5 truncate">
                                    {{ trans_choice('global.plural_products', $category->products_count, ['count' => $category->products_count]) }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
