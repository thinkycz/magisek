@php
    $prefix = isset($prefix) ? $prefix : '';
@endphp

<tr>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="text-sm leading-5 text-gray-900">{{ $prefix . ' ' . $category->name }}</span>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="text-sm leading-5 text-gray-900">{{ $category->position }}</span>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="text-sm leading-5 text-gray-900">{{ $category->products_count }}</span>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <x-boolean :checked="$category->enabled"></x-boolean>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <x-chevron-link :href="route('acp.categories.edit', $category)"></x-chevron-link>
    </td>
</tr>

@foreach($category->children as $subcategory)
    @include('admin.categories.partials.category_row', ['category' => $subcategory, 'prefix' => $prefix . '--'])
@endforeach
