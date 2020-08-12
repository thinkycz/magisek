<ul class="flex flex-col space-y-2">
    @foreach($categories as $category)
        @if($category->children->isNotEmpty())
            <li x-data="{ open: false }" class="space-y-2">
                <div class="flex items-center justify-between">
                    <a href="{{ route('categories.show', $category) }}"
                       class="flex-1 px-4 py-2 h-8 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold rounded-l text-xs uppercase truncate hover:bg-cool-gray-300">
                        {{ $category->name }}
                    </a>

                    <a @click.prevent="open = !open" href="#" class="px-4 py-2 h-8 bg-cool-gray-300 shadow-sm rounded-r hover:bg-cool-gray-400">
                        <x-icons.chevron-down class="w-4 h-4"></x-icons.chevron-down>
                    </a>
                </div>

                <ul x-show="open" class="ml-4 flex flex-col space-y-2">
                    @foreach($category->children as $subcategory)
                        <li class="flex items-center justify-between">
                            <a href="{{ route('categories.show', $subcategory) }}"
                               class="flex-1 px-4 py-2 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold rounded text-xs uppercase truncate hover:bg-cool-gray-300">
                                {{ $subcategory->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="flex items-center justify-between">
                <a href="{{ route('categories.show', $category) }}"
                   class="flex-1 px-4 py-2 h-8 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold rounded text-xs uppercase truncate hover:bg-cool-gray-300">
                    {{ $category->name }}
                </a>
            </li>
        @endif
    @endforeach

    <li class="flex">
        <a href="{{ route('categories.index') }}"
           class="flex-1 px-4 py-2 h-8 bg-teal-100 shadow-sm text-teal-800 font-semibold rounded text-xs uppercase truncate hover:bg-teal-200">
            {{ __('global.all_categories') }}
        </a>
    </li>
</ul>
