@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('pages.pages') }}
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button :href="route('acp.pages.create')" class="bg-teal-600 hover:bg-teal-500">
                <x-icons.plus class="w-4 h-4 mr-2"></x-icons.plus>
                {{ __('pages.add_page') }}
            </x-button>
        </div>
    </div>

    <div class="flex flex-col mt-16">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('pages.title') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('pages.slug') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($pages as $page)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <a href="{{ route('pages.show', $page) }}" class="text-sm leading-5 text-blue-700 hover:text-blue-600 hover:underline font-semibold" target="_blank">
                                    {{ $page->title }}
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="text-sm leading-5 text-gray-900">{{ $page->slug }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <x-chevron-link :href="route('acp.pages.edit', $page)"></x-chevron-link>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $pages->links() }}
@endsection
