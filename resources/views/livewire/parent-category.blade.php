<div>
    <x-input name="category_name" :title="__('global.category_name')" wire:model="name"></x-input>

    @if($categories->isNotEmpty())
        <div class="w-full bg-white rounded-lg border border-gray-200 mt-2 z-10">
            <ul>
                @foreach($categories as $parent)
                    @if($parent)
                        <li class="px-4 py-2 flex justify-between items-center border-b border-gray-100">
                            <span class="text-sm font-semibold">{{ $parent->name }}</span>

                            @if(!$parent->isSelfOrDescendantOf($category) && !$parent->isSelfOrAncestorOf($category))
                                <x-button wire:click="associate({{ $parent->id }})"
                                          class="bg-teal-600 hover:bg-teal-500">{{ __('global.attach') }}</x-button>

                            @else
                                <x-button class="bg-gray-500">{{ __('global.attach') }}</x-button>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    @endif
</div>
