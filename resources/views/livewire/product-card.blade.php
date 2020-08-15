<div class="col-span-1 flex flex-col bg-white rounded-lg shadow relative">
    @if($product->tags->isNotEmpty())
        <div class="absolute z-10">
            @foreach($product->tags->take(3) as $tag)
                <p class="text-xs font-semibold text-white uppercase py-1 px-2 rounded-r my-2 bg-red-600">
                    {{ $tag->value }}
                </p>
            @endforeach
        </div>
    @endif

    <div class="flex-1 flex flex-col p-4">
        <a href="{{ route('products.show', $product) }}">
            <img class="w-full h-40 flex-shrink-0 mx-auto object-contain" src="{{ $product->thumbnail }}"
                 alt="{{ $product->name }}"/>
        </a>

        <a href="{{ route('products.show', $product) }}"
           class="mt-6 text-gray-900 text-sm leading-5 font-medium hover:underline">
            {{ $product->name }}
        </a>

        <dl class="mt-3 flex-grow flex flex-col justify-between">
            @if($product->old_price)
                <dd class="text-gray-500 text-xs leading-5 line-through">{{ $product->formatted_old_price }}</dd>
            @endif

            <dd class="text-teal-500 text-xl font-semibold leading-5">{{ $product->formatted_price }}</dd>

            @if(settingsRepository()->getCompanyIsVatPayer())
                <dd class="text-gray-500 text-xs font-semibold leading-5">{{ $product->formatted_price_excl_vat }} {{ __('global.excl_vat') }}</dd>
            @endif
        </dl>
    </div>

    <div class="p-4 bg-cool-gray-100">
        <livewire:add-to-basket :product="$product"></livewire:add-to-basket>
    </div>
</div>
