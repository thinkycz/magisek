<x-accordion title="Pricing">
    <x-form :action="route('acp.products.save-pricing', $product)">
        <div class="p-4 space-y-4">
            @foreach($priceLevels as $priceLevel)
                <input type="hidden" name="prices[{{ $priceLevel->id }}][price_level_id]" value="{{ $priceLevel->id }}">

                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <x-input type="number"
                                 name="prices[{{ $priceLevel->id }}][price]"
                                 title="Price - {{ $priceLevel->name }}"
                                 :value="$product->getPrice($priceLevel)->price ?? null">
                        </x-input>
                    </div>

                    <div class="w-1/2">
                        <x-input type="number"
                                 name="prices[{{ $priceLevel->id }}][old_price]"
                                 title="Old Price - {{ $priceLevel->name }}"
                                 :value="$product->getPrice($priceLevel)->old_price ?? null">
                        </x-input>
                    </div>
                </div>
            @endforeach

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">Save</x-button>
        </div>
    </x-form>
</x-accordion>
