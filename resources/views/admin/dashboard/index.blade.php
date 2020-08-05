@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between pt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                {{ __('global.dashboard') }}
            </h2>
        </div>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-teal-500 rounded-md p-3">
                            <x-icons.users class="h-6 w-6 text-white"></x-icons.users>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                    {{ __('global.total_customers') }}
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl leading-8 font-semibold text-gray-900">
                                        {{ $customers_count }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm leading-5">
                        <a href="{{ route('acp.users.index') }}" class="font-medium text-teal-600 hover:text-teal-500 transition ease-in-out duration-150">
                            {{ __('global.view_all') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-teal-500 rounded-md p-3">
                            <x-icons.view-grid class="h-6 w-6 text-white"></x-icons.view-grid>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                    {{ __('global.total_products') }}
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl leading-8 font-semibold text-gray-900">
                                        {{ $products_count }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm leading-5">
                        <a href="{{ route('acp.products.index') }}" class="font-medium text-teal-600 hover:text-teal-500 transition ease-in-out duration-150">
                            {{ __('global.view_all') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-teal-500 rounded-md p-3">
                            <x-icons.shopping-cart class="h-6 w-6 text-white"></x-icons.shopping-cart>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                                    {{ __('global.total_orders') }}
                                </dt>
                                <dd class="flex items-baseline">
                                    <div class="text-2xl leading-8 font-semibold text-gray-900">
                                        {{ $orders_count }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-4 sm:px-6">
                    <div class="text-sm leading-5">
                        <a href="{{ route('acp.orders.index') }}" class="font-medium text-teal-600 hover:text-teal-500 transition ease-in-out duration-150">
                            {{ __('global.view_all') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-16">
        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">
            {{ __('global.latest_orders') }}
        </h3>

        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.order_number') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.customer') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.date') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('global.total') }}
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @forelse($orders as $order)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="text-sm leading-5 text-gray-900">{{ $order->order_number }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="text-sm leading-5 text-gray-900">{{ $order->customer_name }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span
                                    class="text-sm leading-5 text-gray-900">{{ $order->created_at->format('j.n.Y H:i') }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <span class="text-sm leading-5 text-gray-900">{{ $order->formatted_total_value }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <x-chevron-link :href="route('acp.orders.show', $order)"></x-chevron-link>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="100%"
                                class="p-6 text-center text-cool-gray-500 text-sm font-semibold uppercase">
                                {{ __('global.no_results') }}
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
