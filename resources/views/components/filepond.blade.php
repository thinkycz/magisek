@props(['name' => '', 'route' => ''])

<div x-data
     x-init="
        FilePond.setOptions({
            allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
            server: {
                process: {
                    url: '{{ $route }}',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                }
            },
        });

        FilePond.create($refs.{{ $name }});
     ">
    <input type="file" x-ref="{{ $name }}">
</div>

@once
@push('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
@endpush
@endonce
