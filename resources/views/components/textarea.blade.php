@props(['name' => '', 'title' => '', 'value' => '', 'help' => ''])

<div {{ $attributes }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $title }}
    </label>

    <div class="mt-1 relative rounded-md shadow-sm">
        <textarea id="{{ $name }}" name="{{ $name }}"
                  class="form-input block w-full sm:text-sm sm:leading-5">{{ old($name, $value) }}</textarea>
    </div>

    @if($help)
        <p class="mt-2 text-xs font-semibold text-gray-500">
            {{ $help }}
        </p>
    @endif

    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
