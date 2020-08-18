<div class="p-4">
    <form wire:submit.prevent="addNote" class="space-y-6">
        <x-textarea title="Note" wire:model="note"></x-textarea>

        <x-button class="bg-teal-600 hover:bg-teal-500">{{ __('global.save') }}</x-button>
    </form>
</div>
