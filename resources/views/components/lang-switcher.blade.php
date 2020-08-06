<div x-data="{ langopen: false }" class="relative">
    <a href="#" @click="langopen = !langopen" class="flex items-center text-xs text-gray-700 font-semibold hover:underline space-x-1">
        <span>{{ $current }}</span>
        <x-icons.chevron-down class="w-4 h-4"></x-icons.chevron-down>
    </a>

    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg z-30"
         @click.away="langopen = false"
         x-show="langopen"
         style="display: none"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95">

        <div class="rounded-md bg-white shadow-xs">
            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                @foreach($locales as $key => $locale)
                    <a href="{{ url()->current() . '?lang=' . $key }}"
                       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"
                       role="menuitem">
                        <img src="/img/flags/{{ $key }}.png" alt="{{ $locale }}" class="h-4 inline-block mr-2">
                        {{ $locale }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
