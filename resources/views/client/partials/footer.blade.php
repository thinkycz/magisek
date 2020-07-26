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
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Solutions
                        </h4>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Marketing
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Analytics
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Commerce
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Insights
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Support
                        </h4>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Pricing
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Documentation
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Guides
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    API Status
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Company
                        </h4>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    About
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Blog
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Jobs
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Press
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Partners
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h4 class="text-sm leading-5 font-semibold tracking-wider text-gray-400 uppercase">
                            Legal
                        </h4>
                        <ul class="mt-4">
                            <li>
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Claim
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Privacy
                                </a>
                            </li>
                            <li class="mt-4">
                                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                                    Terms
                                </a>
                            </li>
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
