<div x-data="{ categoriesOpen: false }" class="flex flex-col space-y-2">
    <button @click="categoriesOpen = !categoriesOpen"
       class="md:hidden flex-1 px-4 py-2 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold rounded text-xs uppercase truncate hover:bg-cool-gray-300 focus:outline-none flex items-center justify-between">
        {{ __('global.show_categories') }}
        <x-icons.chevron-right class="w-4 h-4 ml-2" x-bind:class="{'transform rotate-90': categoriesOpen}"></x-icons.chevron-right>
    </button>

    <ul class="flex-col space-y-2" :class="categoriesOpen ? 'flex' : 'hidden md:flex'">
        @foreach($categories as $category)
            <li x-data="{ open: false }" class="space-y-2">
                <div class="flex items-center justify-between">
                    <a href="{{ route('categories.show', $category) }}"
                       style="background-color: {{ $category->color }}"
                       class="flex-1 px-4 py-2 h-8 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold text-xs uppercase truncate hover:bg-cool-gray-300 hover:opacity-75 {{ $category->children->isNotEmpty() ? 'rounded-l' : 'rounded' }}">
                        {{ $category->name }}
                    </a>

                    @if($category->children->isNotEmpty())
                        <a @click.prevent="open = !open" href="#"
                           class="px-4 py-2 h-8 bg-cool-gray-300 shadow-sm rounded-r hover:bg-cool-gray-400">
                            <x-icons.chevron-down class="w-4 h-4"></x-icons.chevron-down>
                        </a>
                    @endif
                </div>

                <ul x-show="open" class="ml-4 flex flex-col space-y-2" style="display: none">
                    @foreach($category->children as $subcategory)
                        <li class="flex items-center justify-between">
                            <a href="{{ route('categories.show', $subcategory) }}"
                               style="background-color: {{ $subcategory->color }}"
                               class="flex-1 px-4 py-2 bg-cool-gray-200 shadow-sm text-gray-800 font-semibold rounded text-xs uppercase truncate hover:bg-cool-gray-300 hover:opacity-75">
                                {{ $subcategory->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach

        <li class="flex">
            <a href="{{ route('categories.index') }}"
               class="flex-1 px-4 py-2 h-8 bg-teal-100 shadow-sm text-teal-800 font-semibold rounded text-xs uppercase truncate hover:bg-teal-200">
                {{ __('global.all_categories') }}
            </a>
        </li>
    </ul>
</div>
