@if($checked)
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-green-100 text-green-800">
        <x-icons.check class="w-4 h-4"></x-icons.check>
    </span>
@else
    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium leading-5 bg-red-100 text-red-800">
        <x-icons.x class="w-4 h-4"></x-icons.x>
    </span>
@endif
