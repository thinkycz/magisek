@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        {{ __('privacy.privacy_policy') }}
                    </h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('privacy.privacy_policy_sub') }}
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2 space-y-8">
                    <div>
                        <h2 class="font-medium text-xl text-cool-gray-700 mb-4">
                            {{ __('privacy.privacy_info') }}
                        </h2>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.privacy_info_sub') }}
                        </p>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.privacy_info_sub2') }}
                        </p>
                        <ul class="mb-8">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.privacy_info_sub3') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.privacy_info_sub4') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.privacy_info_sub5') }}
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.privacy_info_sub6') }}
                        </p>
                    </div>

                    <div>
                        <h2 class="font-medium text-xl text-cool-gray-700 mb-4">
                            {{ __('privacy.account_deletion') }}
                        </h2>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.account_deletion_sub') }}
                        </p>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.account_deletion_sub2') }}
                        </p>
                        <ul class="mb-4">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_sub3') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_sub4') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_sub5') }}
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.account_deletion_notice') }}
                        </p>
                        <ul class="mb-4">
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_notice2') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_notice3') }}
                            </li>
                            <li class="text-cool-gray-600 mb-2 ml-8 list-disc">
                                {{ __('privacy.account_deletion_notice4') }}
                            </li>
                        </ul>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.contact_us_for_more_info') }}
                        </p>
                        <p class="text-cool-gray-600 font-semibold mb-4">
                            {{ __('privacy.send_request_to_email', ['email' => settingsRepository()->getCompanyEmail()]) }}
                        </p>
                        <p class="text-cool-gray-600 mb-4">
                            {{ __('privacy.request_fulfilled') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('privacy.preferences') }}</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('privacy.preferences_sub') }}
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-form :action="route('profile.update-subscription-settings')">
                        <x-checkbox name="receive_newsletter"
                                    :title="__('privacy.receive_newsletter')"
                                    class="mt-4"
                                    :value="auth()->user()->receive_newsletter">
                        </x-checkbox>

                        <div class="mt-8 text-right">
                            <div class="inline-flex rounded-md shadow-sm">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                                    {{ __('global.save') }}
                                </button>
                            </div>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
