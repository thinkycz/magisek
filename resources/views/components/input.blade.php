@props(['name' => '', 'title' => '', 'value' => '', 'type' => 'text', 'required' => false])

<div {{ $attributes->except('wire:model') }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $title }}
        @if($required)
            <sup class="text-red-500 font-bold">*</sup>
        @endif
    </label>

    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="{{ $type }}"
               id="{{ $name }}"
               name="{{ $name }}"
               {{ $required ? 'required' : '' }}
               {{ $attributes->only('wire:model') }}
               value="{{ old($name, $value) }}"
               class="form-input block w-full sm:text-sm sm:leading-5 {{ $type == 'color' ? 'h-10' : '' }}"/>
    </div>

    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
