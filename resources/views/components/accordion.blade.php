@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'bg-cool-gray-100 shadow rounded-lg mb-2']) }} x-data="{ open: false }">
    <div @click="open = !open"
         class="p-4 sm:flex justify-between items-center cursor-pointer group bg-white rounded-lg">
        <h4 class="text-sm text-cool-gray-800 font-semibold group-hover:underline">{{ $title }}</h4>

        <div class="mt-2 sm:mt-0 flex items-center justify-between">
            <x-icons.chevron-down class="w-6 h-6 transform duration-200 transition-transform" x-bind:class="{'rotate-180': open}"></x-icons.chevron-down>
        </div>
    </div>

    <div x-show="open"
         x-transition:enter="ease-in-out duration-200 transition-all"
         x-transition:enter-start="max-h-0 opacity-0"
         x-transition:enter-end="max-h-screen opacity-100"
         x-transition:leave="ease-in-out duration-200 transition-all"
         x-transition:leave-start="max-h-screen opacity-100"
         x-transition:leave-end="max-h-0 opacity-0">
        {{ $slot }}
    </div>
</div>
