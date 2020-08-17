@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('global.personal_information') }}</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        {{ __('global.use_valid_email') }}
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-form :action="route('profile.update-account-settings')">
                        <div class="grid grid-cols-6 gap-6">
                            <x-input name="first_name"
                                     :title="__('global.first_name')"
                                     :value="auth()->user()->first_name"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>

                            <x-input name="last_name"
                                     :title="__('global.last_name')"
                                     :value="auth()->user()->last_name"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>

                            <x-input type="email"
                                     name="email"
                                     :title="__('global.email')"
                                     :value="auth()->user()->email"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>

                            <x-input type="number"
                                     name="phone"
                                     :title="__('global.phone')"
                                     :value="auth()->user()->phone"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>

                            <x-input type="password"
                                     name="password"
                                     :title="__('global.password')"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>

                            <x-input type="password"
                                     name="password_confirmation"
                                     :title="__('global.password_confirmation')"
                                     class="col-span-6 sm:col-span-3">
                            </x-input>
                        </div>

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
