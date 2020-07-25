@extends('admin.layout')

@section('content')
    <div class="md:flex md:items-center md:justify-between mt-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Products
            </h2>
        </div>

        <div class="mt-4 flex md:mt-0 md:ml-4">
            <x-button :href="route('acp.products.edit', $product)" class="bg-teal-600 hover:bg-teal-500">
                <x-icons.pencil class="w-4 h-4 mr-2"></x-icons.pencil>
                Edit Product
            </x-button>
        </div>
    </div>

    <div class="flex flex-col mt-16 space-y-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $product->name }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    {{ $product->slug }}
                </p>
            </div>
            <div class="px-4 py-5 sm:p-0">
                <dl>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Catalog
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->catalog }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Barcode
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->barcode }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Quantity In Stock
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->quantity_in_stock }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Minimum Order Quantity
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->moq }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            VAT rate
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->vatrate }}
                        </dd>
                    </div>
                    <div
                        class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
                        <dt class="text-sm leading-5 font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $product->description }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <x-accordion title="Pricing">
            <div class="h-32 w-32 p-4">
                asdasd

                sdfs

                sdf

                sdf
            </div>
        </x-accordion>

        <x-accordion title="Categories">
            <div class="p-4">
            </div>
        </x-accordion>

        <x-accordion title="Stock">
            <div class="p-4">
            </div>
        </x-accordion>

        <x-accordion title="Quantity Discounts">
            <div class="p-4">
            </div>
        </x-accordion>

        <x-accordion title="Properties">
            <div class="p-4">
            </div>
        </x-accordion>

        <x-accordion title="Tags">
            <div class="p-4">
            </div>
        </x-accordion>
    </div>
@endsection
