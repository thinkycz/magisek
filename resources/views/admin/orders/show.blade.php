@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('orders.orders') }}
            </h2>

            <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
                <div class="px-4 py-5 border-b border-gray-200 sm:px-6 space-y-2">
                    <h3 class="text-xl leading-6 font-medium text-gray-900">
                        {{ __('orders.order_detail') }}
                    </h3>
                    <p class="max-w-2xl text-sm leading-5 text-gray-500">
                        {{ __('orders.order_number') }}
                        <span class="font-semibold">{{ $order->order_number }}</span>
                    </p>
                </div>
                <div class="px-4 py-5 sm:px-6 border-b">
                    <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.billing_details') }}
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
                                {{ __('orders.shipping_details') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                <p class="text-lg">
                                    {{$order->shippingDetail->full_name}}
                                </p>
                                <p>{{$order->shippingDetail->street}}</p>
                                <p>{{ $order->billingDetail->zipcode }} {{ $order->billingDetail->city }}</p>
                                <p>{{ $order->billingDetail->country->name }}</p></dd>
                        </div>
                        @if($order->billingDetail->company_id)
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    {{ __('orders.company_id') }}
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    {{$order->billingDetail->company_id}}
                                </dd>
                            </div>
                        @endif
                        @if($order->billingDetail->vat_id)
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    {{ __('orders.vat_id') }}
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    {{$order->billingDetail->vat_id}}
                                </dd>
                            </div>
                        @endif
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.delivery_method') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{$order->deliveryMethod->name}}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.payment_method') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{$order->paymentMethod->name}}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.email') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{ $order->email }}
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.phone') }}
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
                                {{ __('orders.invoice_number') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $order->invoice_number }}
                            </dd>
                        </div>

                        <div
                            class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.variable_symbol') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $order->variable_symbol }}
                            </dd>
                        </div>
                        <div
                            class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.tax_date') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $order->tax_date->format('j.n.Y') }}
                            </dd>
                        </div>
                        <div
                            class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.due_date') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $order->due_date->format('j.n.Y')  }}
                            </dd>
                        </div>
                        <div
                            class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                {{ __('orders.total_value') }}
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                <p class="text-lg">{{ $order->formatted_total_value }}</p>
                                <p class="text-gray-600">{{ $order->formatted_total_value_excl_vat }} {{ __('global.excl_vat') }}</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <x-accordion :title="__('orders.ordered_items')" class="mt-8">
                <div class="flex flex-col">
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div class="align-middle inline-block min-w-full overflow-hidden border-b border-cool-gray-200">
                            <table class="min-w-full">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        {{ __('orders.product') }}
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        {{ __('orders.quantity') }}
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        {{ __('orders.price') }}
                                    </th>
                                    <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                        {{ __('orders.total') }}
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-cool-gray-200">
                                @foreach($order->orderedItems as $orderedItem)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-teal-700 hover:underline">
                                            <a href="{{ route('products.show', $orderedItem->product) }}">{{ $orderedItem->name }}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            {{ $orderedItem->quantity }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            {{$orderedItem->formatted_price}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-cool-gray-500">
                                            {{$orderedItem->formatted_total_price}}
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
    </div>
@endsection
