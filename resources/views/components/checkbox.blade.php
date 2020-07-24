@props(['name' => '', 'title' => '', 'value' => ''])

<div {{ $attributes->except('wire:model') }}>
    <div class="flex items-start">
        <div class="absolute flex items-center h-5">
            <input type="hidden" name="{{ $name }}" value="0"/>
            <input id="{{ $name }}"
                   name="{{ $name }}"
                   type="checkbox"
                   value="1"
                   {{ $value ? 'checked' : '' }}
                   {{ $attributes->only('wire:model') }}
                   class="form-checkbox h-4 w-4 text-teal-600 transition duration-150 ease-in-out">
        </div>
        <div class="pl-7 text-sm leading-5">
            <label for="{{ $name }}" class="font-medium text-gray-700">
                {{ $title }}
            </label>
        </div>
    </div>
    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
