<div>
    @if($photos->isNotEmpty())
        <ul class="border border-gray-200 rounded-md">
            @foreach($photos as $photo)
                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5 border-b border-gray-200"
                    :key="{{ $photo->id }}">
                    <div class="w-0 flex-1 flex items-center">
                        <img class="w-12 h-12 rounded object-contain" src="{{ $photo->getUrl() }}"
                             alt="{{ $photo->name }}">
                        <span class="ml-2 flex-1 w-0 truncate">{{ $photo->name }}</span>
                    </div>
                    <div class="ml-4 flex-shrink-0">
                        <button wire:click="delete({{ $photo->id }})"
                                class="font-medium text-red-600 hover:text-red-500 transition duration-150 ease-in-out focus:outline-none">
                            {{ __('global.remove') }}
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
