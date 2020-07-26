<div>
    <x-input name="category_name" title="Category Name" wire:model="name"></x-input>

    @if($categories->isNotEmpty())
        <div class="w-full bg-white rounded-lg border border-gray-200 mt-2 z-10">
            <ul>
                @foreach($categories as $category)
                    <li class="px-4 py-2 flex justify-between items-center border-b border-gray-100">
                        <span class="text-sm font-semibold">{{ $category->name }}</span>

                        @if($product->fresh()->categories->contains($category))
                            <x-button wire:click="toggle({{ $category->id }})" class="bg-red-600 hover:bg-red-500">Detach</x-button>
                        @else
                            <x-button wire:click="toggle({{ $category->id }})" class="bg-teal-600 hover:bg-teal-500">Attach</x-button>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
