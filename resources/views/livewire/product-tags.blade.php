<div class="space-y-4">
    <x-form wire:submit.prevent="attach">
        <x-input name="tag" title="Tag" wire:model="value"></x-input>

        <x-button class="bg-teal-600 hover:bg-teal-500 mt-4">Attach</x-button>
    </x-form>

    @if($tags->isNotEmpty())
        <div class="w-full bg-white rounded-lg border border-gray-200 mt-2 z-10">
            <ul>
                @foreach($tags as $tag)
                    <li class="px-4 py-2 flex justify-between items-center border-b border-gray-100">
                        <span class="text-sm font-semibold">{{ $tag->value }}</span>

                        <x-button wire:click="remove({{ $tag->id }})" class="bg-red-600 hover:bg-red-500">
                            Remove
                        </x-button>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
