<a href="{{ route('basket.index') }}" class="flex items-center space-x-4 px-2 py-1 rounded border border-white hover:border-gray-200">
    <x-icons.shopping-bag class="w-8 h-8 text-gray-500"></x-icons.shopping-bag>

    <div class="flex flex-col">
        <p class="text-sm font-semibold text-gray-800">{{ $total }}</p>
        <p class="text-xs text-gray-500">{{ $count }} items</p>
    </div>
</a>
