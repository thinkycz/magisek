@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        @include('client.partials.profile-menu')

        <div class="my-6">
            <div class="flex flex-col">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-cool-gray-200">
                        <table class="min-w-full">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-cool-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Order Number
                                </th>
                                <th class="px-6 py-3 border-b border-cool-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th class="px-6 py-3 border-b border-cool-gray-200 bg-cool-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Total Value
                                </th>
                                <th class="px-6 py-3 border-b border-cool-gray-200 bg-cool-gray-100"></th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                            @foreach($orders as $order)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="text-sm leading-5 text-gray-900">{{ $order->order_number }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="text-sm leading-5 text-gray-900">{{ $order->created_at->format('j.n.Y H:i') }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <span class="text-sm leading-5 text-gray-900">{{ $order->formatted_total_value }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <x-chevron-link :href="route('orders.show', $order)"></x-chevron-link>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{ $orders->links() }}
        </div>
    </div>
@endsection
