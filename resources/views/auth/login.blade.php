@extends('auth.layout')

@section('title', __('auth.sign_in_to_your_account'))

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-3xl font-semibold text-center text-gray-900 leading-9">
                {{ __('auth.sign_in_to_your_account') }}
            </h2>
            <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                <a href="{{ route('register') }}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    {{ __('auth.or_create_new_account') }}
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white border-2 border-gray-100 sm:rounded-lg sm:px-10">
                <x-form :action="route('login')">
                    <x-input type="email" name="email" :title="__('global.email')" class="mb-6"></x-input>

                    <x-input type="password" name="password" :title="__('global.password')" class="mb-6"></x-input>

                    <div class="flex items-center justify-between mb-6">
                        <x-checkbox name="remember" :title="__('auth.remember_me')"></x-checkbox>

                        <div class="text-sm leading-5">
                            <a href="{{ route('password.request') }}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                                {{ __('auth.forgot_your_password') }}
                            </a>
                        </div>
                    </div>

                    <div class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                            {{ __('global.login') }}
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
