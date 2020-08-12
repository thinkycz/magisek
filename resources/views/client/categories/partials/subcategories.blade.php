<div>
    <h2 class="text-gray-700 text-xs font-medium uppercase tracking-wide">
        {{ __('global.subcategories') }}
    </h2>

    <ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($category->children as $subcategory)
            <li class="col-span-1 flex shadow-sm rounded-md">
                <a href="{{ route('categories.show', $subcategory) }}"
                   class="flex-1 flex items-center justify-between border border-gray-200 bg-white rounded-md truncate hover:bg-teal-50">
                    <div class="flex-1 px-4 py-2 text-sm leading-5 truncate">
                        <p class="text-gray-900 font-medium hover:text-gray-600 transition ease-in-out duration-150">
                            {{ $subcategory->name }}
                        </p>
                        <p class="text-gray-500">{{ trans_choice('global.plural_products', $subcategory->products()->count(), ['count' => $subcategory->products()->count()]) }}</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                        <button
                            class="w-8 h-8 inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition ease-in-out duration-150">
                            <x-icons.chevron-right class="w-5 h-5"></x-icons.chevron-right>
                        </button>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>
