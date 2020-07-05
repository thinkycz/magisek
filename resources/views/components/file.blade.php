@props(['name' => '', 'title' => ''])

<div {{ $attributes }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $title }}
    </label>

    <div class="mt-1 relative rounded-md shadow-sm">
        <input type="file" id="{{ $name }}" name="{{ $name }}" class="form-input block w-full sm:text-sm sm:leading-5"/>
    </div>

    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
