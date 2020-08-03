<div class="bg-cool-gray-100 border-t-2 border-teal-500 py-2">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <div class="space-x-4">
                <div class="inline text-xs text-gray-700 font-semibold">
                    {{ settingsRepository()->getCompanyPhoneNumber() }}
                </div>
                <div class="inline text-xs text-gray-700 font-semibold">
                    {{ settingsRepository()->getCompanyEmail() }}
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <x-lang-switcher></x-lang-switcher>

                @auth
                    @can('access-admin-panel')
                        <a href="{{ route('acp.dashboard') }}"
                           class="text-xs text-gray-700 font-semibold hover:underline">
                            {{ __('global.admin_panel') }}
                        </a>
                    @endcan
                    <a href="{{ route('orders.index') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        {{ __('global.my_profile') }} ({{ auth()->user()->name }})
                    </a>
                    <a href="{{ route('logout') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        {{ __('global.logout') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        {{ __('global.login') }}
                    </a>
                    <a href="{{ route('register') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        {{ __('global.register') }}
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
