@extends('auth.layout')

@section('title', __('auth.create_new_account'))

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-900 leading-9">
                {{ __('auth.create_new_account') }}
            </h2>

            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                <a href="{{ route('login') }}"
                   class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('auth.or_sign_in_to_your_account') }}
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white border-2 border-gray-100 sm:rounded-lg sm:px-10">
                <x-form :action="route('register')">
                    <x-input name="first_name" :title="__('global.first_name')" class="mb-6"></x-input>

                    <x-input name="last_name" :title="__('global.last_name')" class="mb-6"></x-input>

                    <x-input type="email" name="email" :title="__('global.email')" class="mb-6"></x-input>

                    <x-input type="password" name="password" :title="__('global.password')" class="mb-6"></x-input>

                    <x-input type="password" name="password_confirmation" :title="__('global.password_confirmation')" class="mb-6"></x-input>

                    <div class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                            {{ __('global.register') }}
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
