@extends('auth.layout')
@section('title', 'Confirm your password')

@section('content')
    <div>
        @livewire('auth.passwords.confirm')
    </div>
@endsection
