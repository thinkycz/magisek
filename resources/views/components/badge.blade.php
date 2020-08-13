@props(['color' => '#ededed'])

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 text-gray-800" style="background-color: {{ $color }}">
  {{ $slot }}
</span>
