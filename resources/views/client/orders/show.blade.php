@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <div class="flex justify-between">
                    <div class="space-y-2">
                        <h3 class="text-xl leading-6 font-medium text-gray-900">
                            {{ __('global.order_detail') }}
                        </h3>
                        <p class="max-w-2xl text-sm leading-5 text-gray-500">
                            {{ __('global.order_number') }}
                            <span class="font-semibold">{{ $order->order_number }}</span>
                        </p>
                    </div>
                    <div class="flex items-center">
                        <x-badge :color="$order->status->color">{{ $order->status->name }}</x-badge>
                    </div>
                </div>
            </div>
            <div class="px-4 py-5 sm:px-6 border-b">
                <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.billing_address') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            <p class="text-lg">
                                {{ $order->billingDetail->full_name }}
                            </p>
                            <p>{{ $order->billingDetail->street }}</p>
                            <p>{{ $order->billingDetail->zipcode }} {{ $order->billingDetail->city }}</p>
                            <p>{{ $order->billingDetail->country->name }}</p></dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.shipping_address') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            <p class="text-lg">
                                {{ $order->shippingDetail->full_name }}
                            </p>
                            <p>{{ $order->shippingDetail->street }}</p>
                            <p>{{ $order->shippingDetail->zipcode }} {{ $order->shippingDetail->city }}</p>
                            <p>{{ $order->shippingDetail->country->name }}</p></dd>
                    </div>
                    @if($order->billingDetail->company_id)
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('global.company_id') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{$order->billingDetail->company_id}}
                            </dd>
                        </div>
                    @endif
                    @if($order->billingDetail->vat_id)
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('global.vat_id') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{$order->billingDetail->vat_id}}
                            </dd>
                        </div>
                    @endif
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.delivery_method') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{$order->deliveryMethod->name}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.payment_method') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{$order->paymentMethod->name}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.email') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->email }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.phone') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->phone}}
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="px-4 py-5 sm:p-0">
                <dl>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.invoice_number') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->invoice_number }}
                        </dd>
                    </div>

                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.variable_symbol') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->variable_symbol }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.tax_date') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->tax_date->format('j.n.Y') }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.due_date') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->due_date->format('j.n.Y')  }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            {{ __('global.total') }}
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            <p class="text-lg">{{ $order->formatted_total_value }}</p>
                            <p class="text-gray-600">{{ $order->formatted_total_value_excl_vat }} {{ __('global.excl_vat') }}</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <x-accordion :title="__('global.ordered_items')" class="mt-8">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block min-w-full overflow-hidden border-b border-cool-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    {{ __('global.product') }}
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    {{ __('global.quantity') }}
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    {{ __('global.price') }}
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    {{ __('global.total') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-cool-gray-200">
                            @foreach($order->orderedItems as $orderedItem)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                        <a href="{{ $orderedItem->product ? route('products.show', $orderedItem->product) : null }}"
                                           class="text-teal-700 font-medium hover:underline">{{ $orderedItem->name }}</a>

                                        <div class="text-xs text-gray-600">
                                            @if($orderedItem->type === \App\Enums\OrderedItemType::PRODUCT && ($orderedItem->barcode || $orderedItem->catalog))
                                                {{ $orderedItem->barcode ? 'EAN ' . $orderedItem->barcode : 'CAT ' . $orderedItem->catalog }}
                                            @else
                                                {{ \App\Enums\OrderedItemType::translation($orderedItem->type) }}
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        {{ $orderedItem->quantity }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        <div>
                                            {{ $orderedItem->formatted_price }}
                                        </div>

                                        @if($orderedItem->discount > 0)
                                            <div class="text-xs text-red-600">
                                                {{ __('global.discount') }} {{ $orderedItem->formatted_discount }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                        {{ $orderedItem->formatted_total_price }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </x-accordion>

    </div>
@endsection
