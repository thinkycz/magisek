@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Pages
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            @if($page->exists)
                <x-form-button method="delete" :action="route('acp.pages.destroy', $page)" class="bg-red-600 hover:bg-red-500">
                    <x-icons.trash class="w-4 h-4 mr-2"></x-icons.trash>
                    Delete Page
                </x-form-button>
            @endif
        </div>
    </div>

    <x-form :method="$page->exists ? 'PUT' : 'POST'" :action="$page->exists ? route('acp.pages.update', $page) : route('acp.pages.store')">
        <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Page
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Please enter details.
                    </p>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-input name="title" title="Title" :value="$page->title"></x-input>

                    <x-editor name="content" title="Content" :value="$page->content" class="mt-6"></x-editor>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <x-button class="bg-teal-600 hover:bg-teal-500">Save</x-button>
        </div>
    </x-form>
@endsection
