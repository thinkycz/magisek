<div>
    <h2 class="text-2xl text-gray-700 font-semibold mb-2">
        {{ auth()->user()->name }}
    </h2>
</div>

<div>
    <div class="sm:hidden">
        <select aria-label="Selected tab" class="form-select block w-full">
            <option selected>{{ __('global.order_history') }}</option>
            <option>{{ __('global.my_profile') }}</option>
            <option>{{ __('global.privacy_settings') }}</option>
        </select>
    </div>

    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px space-x-8">
                <a href="{{ route('orders.index') }}" class="inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 focus:outline-none focus:text-gray-700 focus:border-gray-300 {{ request()->routeIs('orders.*') ? 'text-teal-600 border-teal-600 hover:text-teal-600 hover:border-teal-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    <x-icons.credit-card class="mr-2 h-5 w-5"></x-icons.credit-card>
                    <span>{{ __('global.order_history') }}</span>
                </a>
                <a href="{{ route('profile.index') }}" class="inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 focus:outline-none focus:text-gray-700 focus:border-gray-300 {{ request()->routeIs('profile.*') ? 'text-teal-600 border-teal-600 hover:text-teal-600 hover:border-teal-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    <x-icons.users class="mr-2 h-5 w-5"></x-icons.users>
                    <span>{{ __('global.my_profile') }}</span>
                </a>
                <a href="{{ route('privacy.index') }}" class="inline-flex items-center py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 focus:outline-none focus:text-gray-700 focus:border-gray-300 {{ request()->routeIs('privacy.*') ? 'text-teal-600 border-teal-600 hover:text-teal-600 hover:border-teal-600' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    <x-icons.flag class="mr-2 h-5 w-5"></x-icons.flag>
                    <span>{{ __('global.privacy_settings') }}</span>
                </a>
            </nav>
        </div>
    </div>
</div>
