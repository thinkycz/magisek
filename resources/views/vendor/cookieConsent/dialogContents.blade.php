<div class="js-cookie-consent cookie-consent fixed inset-x-0 bottom-0">
    <div class="bg-teal-600">
        <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="flex-1 flex items-center">
                    <p class="cookie-consent__message ml-3 font-medium text-white text-sm">
                        {!! trans('cookieConsent::texts.message') !!}
                    </p>
                </div>

                <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                    <div class="flex items-center justify-center">
                        <button
                            class="js-cookie-consent-agree cookie-consent__agree rounded-md shadow-sm px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-teal-600 bg-white hover:text-teal-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                            {{ trans('cookieConsent::texts.agree') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
