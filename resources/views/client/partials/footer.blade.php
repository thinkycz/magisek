<div class="bg-white border-t border-gray-100">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="lg:col-span-1">
                @if(settingsRepository()->getStoreLogo())
                    <img class="h-10" src="{{ settingsRepository()->getStoreLogo() }}"
                         alt="{{ settingsRepository()->getStoreName() }}">
                @else
                    <x-logo class="w-8 h-8"></x-logo>
                @endif

                <p class="mt-8 text-gray-500 text-base leading-6">
                    {{ settingsRepository()->getStoreDescription() }}
                </p>

                <div class="mt-8 flex">
                    <a href="https://www.facebook.com/magisekcz" class="text-gray-400 hover:text-gray-500" target="_blank">
                        <span class="sr-only">Facebook</span>
                        <x-icons.facebook class="h-6 w-6"></x-icons.facebook>
                    </a>
                    <a href="https://www.instagram.com/magisek_cz" class="ml-6 text-gray-400 hover:text-gray-500" target="_blank">
                        <span class="sr-only">Instagram</span>
                        <x-icons.instagram class="h-6 w-6"></x-icons.instagram>
                    </a>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 lg:mt-0 lg:col-span-2">
                <div class="md:grid md:grid-cols-3 md:gap-8 md:col-span-2 space-y-12 md:space-y-0">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            {{ __('global.store') }}
                        </h4>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('categories.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.all_categories') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('basket.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.basket') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.pages') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            {{ __('global.my_profile') }}
                        </h4>
                        <ul class="mt-4 space-y-4">
                            <li>
                                <a href="{{ route('orders.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.order_history') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('profile.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.my_profile') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy.index') }}"
                                   class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    {{ __('global.privacy_settings') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            {{ __('global.links') }}
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
                &copy; {{ now()->year }} Magisek.cz - {{ __('global.copyright') }}
            </p>
        </div>
    </div>
</div>
