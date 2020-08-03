<div x-data="{ value: '', overlay: false }" x-init="value = '{{ $value }}'" class="flex-1">
    <div class="flex-1 relative z-20">
        <div>
            <x-form method="GET" :action="route('search.index')">
                <label for="query" class="sr-only">
                    {{ __('global.search') }}
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <x-icons.search class="h-5 w-5 text-gray-400"></x-icons.search>
                    </div>
                    <input wire:model="value"
                           x-on:click="overlay = true"
                           x-model="value"
                           id="query"
                           name="query"
                           class="bg-white border rounded block w-full p-4 pl-10 sm:text-md sm:leading-5 focus:outline-none"
                           placeholder="{{ __('global.search') }}..."/>
                </div>
            </x-form>
        </div>

        <div x-show="value && overlay"
             x-transition:enter="transition-opacity ease-linear duration-150"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             style="display: none;"
             class="bg-white w-full rounded mt-4 shadow-lg absolute border">
            <h2 class="text-xs font-semibold uppercase text-gray-600 px-4 py-3">{{ __('global.search_results') }}</h2>

            <ul>
                @forelse($products as $product)
                    <li class="hover:bg-cool-gray-200 px-4 py-3 cursor-pointer">
                        <a class="flex items-center space-x-4 " href="{{ route('products.show', $product) }}">
                            <img class="h-12 w-12 rounded"
                                 src="{{ $product->thumbnail }}"
                                 alt="{{ $product->name }}">

                            <div class="flex-1 flex justify-between items-center">
                                <div>
                                    <h3 class="text-gray-700 font-semibold">{{ $product->name }}</h3>
                                    @if($product->barcode)
                                        <p class="text-xs text-gray-600">EAN: {{ $product->barcode }}</p>
                                    @elseif($product->catalog)
                                        <p class="text-xs text-gray-600">CAT: {{ $product->catalog }}</p>
                                    @endif
                                </div>
                                <p class="font-semibold text-teal-700">{{ $product->formatted_price }}</p>
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="p-4 text-center font-semibold uppercase text-gray-500 text-xs">
                        {{ __('global.no_results') }}
                    </li>
                @endforelse
            </ul>
        </div>
    </div>

    <div x-show="value && overlay"
         x-on:click="overlay = false"
         x-transition:enter="transition-opacity ease-linear duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="w-full h-full fixed left-0 top-0 z-10"
         style="background-color: rgba(0, 0, 0, 0.4); display: none;"></div>
</div>
