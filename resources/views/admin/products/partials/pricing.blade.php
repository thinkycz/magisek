@php
    $priceLevels = \App\Models\PriceLevel::where('enabled', true)->get();
@endphp

<x-accordion :title="__('products.pricing')">
    <x-form :action="route('acp.products.update-pricing', $product)">
        <div class="p-4 space-y-4">
            @foreach($priceLevels as $priceLevel)
                <input type="hidden" name="prices[{{ $priceLevel->id }}][price_level_id]" value="{{ $priceLevel->id }}">

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-input type="number"
                                 name="prices[{{ $priceLevel->id }}][price]"
                                 title="{{ __('products.price') }} - {{ $priceLevel->name }}"
                                 :value="$product->getPrice($priceLevel)->price ?? null">
                        </x-input>
                    </div>

                    <div class="w-1/2">
                        <x-input type="number"
                                 name="prices[{{ $priceLevel->id }}][old_price]"
                                 title="{{ __('products.old_price') }} - {{ $priceLevel->name }}"
                                 :value="$product->getPrice($priceLevel)->old_price ?? null">
                        </x-input>
                    </div>
                </div>
            @endforeach

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
