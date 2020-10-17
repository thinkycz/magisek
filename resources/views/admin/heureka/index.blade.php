@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('heureka.heureka') }}
            </h2>
        </div>
    </div>

    <livewire:heureka-xml-generate></livewire:heureka-xml-generate>
@endsection
