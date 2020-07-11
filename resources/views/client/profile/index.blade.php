@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="mt-6 bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Use a permanent address where you can receive mail.
                    </p>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <x-form :action="route('profile.update-account-settings')">
                        <div class="grid grid-cols-6 gap-6">
                            <x-input name="first_name" title="First Name" :value="auth()->user()->first_name"
                                     class="col-span-6 sm:col-span-3"></x-input>

                            <x-input name="last_name" title="Last Name" :value="auth()->user()->last_name"
                                     class="col-span-6 sm:col-span-3"></x-input>

                            <x-input type="email" name="email" title="Email address" :value="auth()->user()->email"
                                     class="col-span-6 sm:col-span-3"></x-input>

                            <x-input type="number" name="phone" title="Phone" :value="auth()->user()->phone"
                                     class="col-span-6 sm:col-span-3"></x-input>

                            <x-input type="password" name="password" title="Password"
                                     class="col-span-6 sm:col-span-3"></x-input>

                            <x-input type="password" name="password_confirmation" title="Password Confirmation"
                                     class="col-span-6 sm:col-span-3"></x-input>
                        </div>

                        <div class="mt-4 px-4 py-3 bg-cool-gray-50 rounded text-right sm:px-6">
                            <div class="inline-flex rounded-md shadow-sm">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Save
                                </button>
                            </div>
                        </div>

                    </x-form>
                </div>
            </div>
        </div>
    </div>
@endsection
