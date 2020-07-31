@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-8">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6 space-y-2">
                <h3 class="text-xl leading-6 font-medium text-gray-900">
                    Order Detail
                </h3>
                <p class="max-w-2xl text-sm leading-5 text-gray-500">
                    Order Number
                    <span class="font-semibold">{{ $order->order_number }}</span>
                </p>
            </div>
            <div class="px-4 py-5 sm:px-6 border-b">
                <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Billing Details
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
                            Shipping Details
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
                                Company ID
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                {{$order->billingDetail->company_id}}
                            </dd>
                        </div>
                    @endif
                    @if($order->billingDetail->vat_id)
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            VAT ID
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{$order->billingDetail->vat_id}}
                        </dd>
                    </div>
                    @endif
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Delivery Method
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{$order->deliveryMethod->name}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Payment Method
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{$order->paymentMethod->name}}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Email
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900">
                            {{ $order->email }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Phone
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
                            Invoice Number

                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->invoice_number }}
                        </dd>
                    </div>

                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Variable Symbol

                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->variable_symbol }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Tax Date
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->tax_date->format('j.n.Y') }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Due Date
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $order->due_date->format('j.n.Y')  }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Total Value
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            <p class="text-lg">{{ $order->formatted_total_value }}</p>
                            <p class="text-gray-600">{{ $order->formatted_total_value_excl_vat }} excl. VAT</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <x-accordion title="Ordered items" class="mt-8">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block min-w-full overflow-hidden border-b border-cool-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Quantity
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Price
                                </th>
                                <th class="px-6 py-3 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-cool-gray-500 uppercase tracking-wider">
                                    Total
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
@endsection
