@extends('documents.layout')

@section('document')
    <div class="flex flex-col">
        <div class="flex justify-between items-center mb-12">
            <img src="{{ settingsRepository()->getStoreLogo() }}" style="height: 55px">

            <div class="text-right">
                <h4 class="text-xl font-semibold text-gray-900">{{ __('global.invoice') }}</h4>
                <p class="text-md font-semibold text-gray-900">{{ $order->invoice_number }}</p>
                <p class="text-sm font-semibold text-gray-600">#{{ $order->order_number }}</p>
                <p class="text-sm font-semibold text-gray-600">VS {{ $order->variable_symbol }}</p>
            </div>
        </div>

        <dl class="grid grid-cols-2 col-gap-4 row-gap-8 mb-12">
            <div class="col-span-1">
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.issuer') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        <p class="text-lg">{{ settingsRepository()->getCompanyName() }}</p>
                        <p>{{ settingsRepository()->getCompanyStreet() }}</p>
                        <p>{{ settingsRepository()->getCompanyZipcode() }} {{ settingsRepository()->getCompanyCity() }}</p>
                    </dd>
                </div>
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.company_id') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ settingsRepository()->getCompanyId() }}
                    </dd>
                </div>
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.vat_id') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ settingsRepository()->getCompanyVatId() }}
                    </dd>
                </div>
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.invoice_date') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ $order->created_at->format('j.n.Y') }}
                    </dd>
                </div>
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.due_date') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ $order->due_date->format('j.n.Y') }}
                    </dd>
                </div>
                @if(settingsRepository()->getCompanyIsVatPayer())
                    <div class="mb-4">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.tax_date') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->tax_date->format('j.n.Y') }}
                        </dd>
                    </div>
                @endif
            </div>

            <div class="col-span-1">
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.billed_to') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        <p class="text-lg">{{ $order->billingDetail->company_name ? $order->billingDetail->company_name : $order->billingDetail->first_name . ' ' . $order->billingDetail->last_name }}</p>
                        <p>{{ $order->billingDetail->street }}</p>
                        <p>{{ $order->billingDetail->zipcode . ' ' . $order->billingDetail->city }}</p>
                    </dd>
                </div>
                @if($order->billingDetail->company_id)
                    <div class="mb-4">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.company_id') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->billingDetail->company_id }}
                        </dd>
                    </div>
                @endif
                @if($order->billingDetail->vat_id)
                    <div class="mb-4">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.vat_id') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->billingDetail->vat_id }}
                        </dd>
                    </div>
                @endif
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.email') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ $order->email }}
                    </dd>
                </div>
                <div class="mb-4">
                    <dt class="text-sm leading-5 font-medium text-gray-500">
                        {{ __('global.phone') }}
                    </dt>
                    <dd class="mt-1 text-sm leading-5 text-gray-900">
                        {{ $order->phone }}
                    </dd>
                </div>
            </div>
        </dl>

        <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full overflow-hidden">
                <table class="min-w-full">
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.product') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.catalog') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.barcode') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.quantity') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.price') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.total') }}
                        </th>
                    </tr>
                    <tbody class="bg-white">
                    @foreach($order->orderedItems as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium text-gray-500">{{ $item->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->catalog }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->barcode }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->quantity }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->formatted_price }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">{{ $item->formatted_total_price }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <dl class="grid grid-cols-2 col-gap-4 row-gap-8 mt-12">
            <div class="col-span-2">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ __('global.total') }}
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900">
                    <p class="text-lg">{{ $order->formatted_total_value }}</p>

                    @if(settingsRepository()->getCompanyIsVatPayer())
                        <p class="text-gray-600">{{ $order->formatted_total_value_excl_vat }} {{ __('global.excl_vat') }}</p>
                    @endif
                </dd>
            </div>
        </dl>
    </div>
@endsection
