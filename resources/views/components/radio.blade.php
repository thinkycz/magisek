@props(['name' => '', 'title' => '', 'value' => '', 'checked' => ''])

<div {{ $attributes->except('wire:model') }} class="flex items-center">
    <input id="{{ $name }}[{{ $value }}]"
           value="{{ $value }}"
           name="{{ $name }}"
           type="radio"
           {{ $attributes->only('wire:model') }}
           {{ $value == old($name, $checked) ? 'checked' : '' }}
           class="form-radio h-4 w-4 text-teal-600 transition duration-150 ease-in-out">
    <label for="{{ $name }}[{{ $value }}]" class="ml-3">
        <span class="block text-sm leading-5 font-medium text-gray-700">{{ $title }}</span>
        {{ $slot }}
    </label>
</div>
