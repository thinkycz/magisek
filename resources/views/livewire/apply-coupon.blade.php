<div x-data="{ open: false }" class="w-80">
    <button x-show="!open" @click="open = true" class="text-sm font-semibold text-gray-600 hover:underline flex items-center">
        <x-icons.chevron-right class="w-4 h-4 mr-2"></x-icons.chevron-right>
        {{ __('global.use_a_coupon') }}
    </button>

    <div x-show="open">
        <x-form wire:submit.prevent="apply" class="space-y-2">
            <x-input name="code" :title="__('global.coupon_code')" wire:model="code"></x-input>

            <x-button class="bg-teal-600 hover:bg-teal-500">{{ __('global.apply_coupon') }}</x-button>
        </x-form>
    </div>
</div>
