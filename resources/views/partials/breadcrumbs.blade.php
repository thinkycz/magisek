@if (count($breadcrumbs))
    <nav class="bg-cool-gray-100 px-4 py-3 rounded w-full">
        <ol class="list-reset flex items-center">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li><a href="{{ $breadcrumb->url }}" class="text-sm text-gray-700 hover:underline">{{ $breadcrumb->title }}</a></li>
                    <li><x-icons.chevron-right class="w-4 h-4 mx-2 text-gray-700">/</x-icons.chevron-right></li>
                @else
                    <li class="text-sm text-gray-700 font-semibold">{{ $breadcrumb->title }}</li>
                @endif

            @endforeach
        </ol>
    </nav>
@endif
