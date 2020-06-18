@extends('auth.layout')
@section('title', 'Reset password')

@section('content')
    <div>
        @livewire('auth.passwords.email')
    </div>
@endsection
