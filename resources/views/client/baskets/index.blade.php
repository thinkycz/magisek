@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6 space-y-8">
        <h2 class="text-2xl text-gray-700 font-semibold mb-2">
            {{ __('global.basket') }}
        </h2>

        <livewire:basket-table></livewire:basket-table>
    </div>
@endsection
