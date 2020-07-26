@props(['name' => '', 'title' => '', 'value' => '', 'type' => 'text'])

<div {{ $attributes }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
        {{ $title }}
    </label>

    <div class="mt-1 relative rounded-md shadow-sm">
        <textarea type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
               class="form-input block w-full sm:text-sm sm:leading-5">{{ old($name, $value) }}</textarea>
    </div>

    @error($name)
    <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
@endsection

@section('scripts')
    <script>
        new FroalaEditor('textarea#{{ $name }}');
    </script>
@endsection
