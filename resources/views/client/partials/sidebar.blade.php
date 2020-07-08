<div class="h-96 overflow-y-auto">
    <ul class="flex flex-col space-y-2">
        @foreach($categories as $category)
            <li class="flex">
                <a href="{{ route('categories.show', $category) }}"
                   class="flex-1 px-4 py-2 bg-cool-gray-100 text-gray-800 font-semibold rounded text-xs uppercase hover:bg-cool-gray-200">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
