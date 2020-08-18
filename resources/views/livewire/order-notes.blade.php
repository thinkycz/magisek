<div class="p-4">
    <form wire:submit.prevent="addNote" class="space-y-4">
        <x-textarea title="Note" wire:model="newnote"></x-textarea>

        <x-button class="bg-teal-600 hover:bg-teal-500">{{ __('global.save') }}</x-button>
    </form>

    @foreach($notes as $note)
        <div class="bg-cool-gray-300 rounded p-2 mt-4">
            <p class="text-sm font-semibold text-cool-gray-800">{{ $note->content }}</p>
            <span class="text-cool-gray-600 font-semibold text-xs">{{ $note->created_at->format('j.n.Y H:i') }}</span>
        </div>
    @endforeach
</div>
