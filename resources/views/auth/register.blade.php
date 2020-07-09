@extends('auth.layout')
@section('title', 'Create a new account')

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-3xl font-semibold text-center text-gray-900 leading-9">
                Create a new account
            </h2>

            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                Or
                <a href="{{ route('login') }}"
                   class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    sign in to your account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white border-2 border-gray-100 sm:rounded-lg sm:px-10">
                <x-form :action="route('register')">
                    <x-input name="name" title="Name" class="mb-6"></x-input>

                    <x-input type="email" name="email" title="Email" class="mb-6"></x-input>

                    <x-input type="password" name="password" title="Password" class="mb-6"></x-input>

                    <x-input type="password" name="password_confirmation" title="Confirm Password" class="mb-6"></x-input>

                    <div class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                            Register
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
