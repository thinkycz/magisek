<div class="bg-white border-t border-gray-100">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="xl:col-span-1">
                @if(settingsRepository()->getStoreLogo())
                    <img class="h-10" src="{{ settingsRepository()->getStoreLogo() }}"
                         alt="{{ settingsRepository()->getStoreName() }}">
                @else
                    <x-logo class="w-8 h-8"></x-logo>
                @endif

                <p class="mt-8 text-gray-500 text-base leading-6">
                    {{ settingsRepository()->getStoreDescription() }}
                </p>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-3 md:gap-8 xl:col-span-2">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Store
                        </h4>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('categories.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    All Categories
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('basket.index') }}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Basket
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Profile
                        </h4>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('orders.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Order History
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Privacy Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Links
                        </h4>
                        <ul class="mt-4 space-y-4">
                            @if(settingsRepository()->get('footer_links', 'link_1_title'))
                                <li>
                                    <a href="{{ settingsRepository()->get('footer_links', 'link_1_url') }}"
                                       class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                        {{ settingsRepository()->get('footer_links', 'link_1_title') }}
                                    </a>
                                </li>
                            @endif
                            @if(settingsRepository()->get('footer_links', 'link_2_title'))
                                <li>
                                    <a href="{{ settingsRepository()->get('footer_links', 'link_2_url') }}"
                                       class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                        {{ settingsRepository()->get('footer_links', 'link_2_title') }}
                                    </a>
                                </li>
                            @endif
                            @if(settingsRepository()->get('footer_links', 'link_3_title'))
                                <li>
                                    <a href="{{ settingsRepository()->get('footer_links', 'link_3_url') }}"
                                       class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                        {{ settingsRepository()->get('footer_links', 'link_3_title') }}
                                    </a>
                                </li>
                            @endif
                            @if(settingsRepository()->get('footer_links', 'link_4_title'))
                                <li>
                                    <a href="{{ settingsRepository()->get('footer_links', 'link_4_url') }}"
                                       class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                        {{ settingsRepository()->get('footer_links', 'link_4_title') }}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base leading-6 text-gray-400 xl:text-center">
                &copy; {{ now()->year }} Powered by Pluli.com - All Rights Reserved
            </p>
        </div>
    </div>
</div>
