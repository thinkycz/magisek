@php
    $availabilities = \App\Models\Availability::all();
    $units = \App\Models\Unit::all();
@endphp

<x-accordion title="Stock">
    <x-form :action="route('acp.products.update-stock', $product)">
        <div class="p-4 space-y-4">
            <x-select name="availability_id" title="Availability" :options="$availabilities" :value="$product->availability_id"></x-select>

            <x-select name="unit_id" title="Unit" :options="$units" :value="$product->unit_id"></x-select>

            <x-input name="quantity_in_stock" title="Quantity In Stock" :value="$product->quantity_in_stock"></x-input>

            <x-input name="moq" title="Min. Order Quantity" :value="$product->moq"></x-input>

            <x-checkbox name="multiply_of_moq_only" title="Multiply of MOQ only" :value="$product->multiply_of_moq_only"></x-checkbox>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">Save</x-button>
        </div>
    </x-form>
</x-accordion>
