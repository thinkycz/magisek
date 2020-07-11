@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        <div class="space-y-4 flex-1">
            <h2 class="text-2xl text-gray-700 font-semibold">
                Kategorie
            </h2>

            <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($categories as $category)
                    <li class="col-span-1 bg-white rounded-lg shadow">
                        <div class="w-full flex items-center justify-between p-6 space-x-6">
                            <div class="flex-1 truncate">
                                <a href="{{ route('categories.show', $category) }}" class="flex items-center space-x-3">
                                    <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">{{ $category->name }}</h3>
                                </a>
                                <p class="mt-1 text-gray-500 text-sm leading-5 truncate">
                                    {{ $category->products_count }} products
                                </p>
                            </div>
                            <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                 alt=""/>
                        </div>
                        <div class="border-t border-gray-200">
                            <div class="-mt-px flex">
                                <div class="w-0 flex-1 flex">
                                    <a href="{{ route('categories.show', $category) }}"
                                       class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                        <x-icons.collection class="w-5 h-5"></x-icons.collection>
                                        <span class="ml-3">Open Category</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
