<div x-data="{ value: '' }" class="flex-1">
    <div class="flex-1 relative z-10">
        <div>
            <label for="search" class="sr-only">
                Search
            </label>
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-icons.search class="h-5 w-5 text-gray-400"></x-icons.search>
                </div>
                <input wire:model="value"
                       x-model="value"
                       id="search"
                       class="bg-white border rounded block w-full p-4 pl-10 sm:text-md sm:leading-5 focus:outline-none"
                       placeholder="Search..."/>
            </div>
        </div>

        <div x-show="value"
             x-transition:enter="transition-opacity ease-linear duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             style="display: none;"
             class="bg-white w-full rounded mt-4 shadow-lg absolute border">
            <h2 class="text-xs font-semibold uppercase text-gray-600 px-4 py-3">Search results</h2>

            <ul>
                @foreach($products as $product)
                    <li class="hover:bg-cool-gray-200 px-4 py-3 cursor-pointer">
                        <a class="flex items-center space-x-4 " href="{{ route('products.show', $product) }}">
                            <img class="h-12 w-12 rounded"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                 alt="">

                            <div class="flex-1 flex justify-between items-center">
                                <h3 class="text-lg text-gray-800">{{ $product->name }}</h3>
                                <p class="text-sm font-semibold text-gray-700">19.90 Kc</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div x-show="value"
         x-transition:enter="transition-opacity ease-linear duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="w-full h-full fixed left-0 top-0" style="background-color: rgba(0, 0, 0, 0.5); display: none;"></div>
</div>
