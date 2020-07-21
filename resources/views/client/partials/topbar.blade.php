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

            <div class="space-x-4">
                @auth
                    <a href="{{ route('profile.index') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        My Profile ({{ auth()->user()->name }})
                    </a>
                    <a href="{{ route('logout') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        Logout
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="text-xs text-gray-700 font-semibold hover:underline">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
