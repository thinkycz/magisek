@extends('auth.layout')
@section('title', 'Reset password')

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-3xl font-semibold text-center text-gray-900 leading-9">
                Reset password
            </h2>
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Please set your new password
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="px-4 py-8 bg-white border-2 border-gray-100 sm:rounded-lg sm:px-10">
                <x-form :action="route('password.update')">
                    <input type="hidden" name="token" value="{{ $token }}">

                    <x-input type="email" name="email" title="Email address" class="mb-6"></x-input>

                    <x-input type="password" name="password" title="Password" class="mb-6"></x-input>

                    <x-input type="password" name="password_confirmation" title="Confirm Password"
                             class="mb-6"></x-input>

                    <div class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                            Reset password
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
