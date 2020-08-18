<div
    class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
    <dt class="text-sm leading-5 font-medium text-gray-500">
        {{ __('orders.total_value') }}
    </dt>
    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
        <p class="text-lg">{{ $total }}</p>

        @if(settingsRepository()->getCompanyIsVatPayer())
            <p class="text-gray-600">{{ $totalExclVat }} {{ __('global.excl_vat') }}</p>
        @endif
    </dd>
</div>
