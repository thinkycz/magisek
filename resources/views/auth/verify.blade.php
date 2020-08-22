@extends('auth.layout')

@section('title', __('auth.verify_your_email_address'))

@section('content')
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-900 leading-9">
                {{ __('auth.verify_your_email_address') }}
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="px-4 py-8 bg-white border-2 border-gray-100 sm:rounded-lg sm:px-10">
                @if (session('resent'))
                    <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow"
                         role="alert">
                        <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>

                        <p>{{ __('auth.fresh_link_sent') }}</p>
                    </div>
                @endif

                <div class="text-sm text-gray-700 text-center">
                    <p class="mb-4">{{ __('auth.verify_email_sub') }}</p>

                    <x-form :action="route('verification.resend')">
                        <x-button class="w-full sm:w-auto bg-teal-500 text-teal-100 px-6 py-2 rounded hover:bg-teal-600 focus:outline-none cursor-pointer">
                            {{ __('auth.resend_verification_email') }}
                        </x-button>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
