<li class="col-span-1 flex flex-col bg-white rounded-lg shadow">
    <div class="flex-1 flex flex-col p-4">
        <img class="w-full h-40 flex-shrink-0 mx-auto object-contain" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="" />
        <a href="{{ route('products.show', $product) }}" class="mt-6 text-gray-900 text-sm leading-5 font-medium hover:underline">
            {{ $product->name }}
        </a>
        <dl class="mt-3 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Price</dt>
            <dd class="text-teal-500 text-xl font-semibold leading-5">{{ $product->formatted_price }}</dd>
            <dt class="sr-only">Price excl. VAT</dt>
            <dd class="text-gray-500 text-xs font-semibold leading-5">{{ $product->formatted_price_excl_vat }}</dd>
        </dl>
    </div>
    <div class="p-4 bg-cool-gray-100">
        <livewire:add-to-basket :product="$product"></livewire:add-to-basket>
    </div>
</li>
