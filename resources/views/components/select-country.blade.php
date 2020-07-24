<div {{ $attributes }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $title }}
    </label>

    <div class="mt-1">
        <div class="rounded-md shadow-sm">
            <select id="{{ $name }}"
                    name="{{ $name }}"
                    class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                <option value=""></option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}" {{ $country->id == old($name, $value) ? 'selected' : '' }}>{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
