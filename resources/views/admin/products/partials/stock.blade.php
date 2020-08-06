@php
    $availabilities = \App\Models\Availability::all();
    $units = \App\Models\Unit::all();
@endphp

<x-accordion :title="__('products.stock')">
    <x-form :action="route('acp.products.update-stock', $product)">
        <div class="p-4 space-y-4">
            <x-select name="availability_id" title="{{ __('products.availability') }}" :options="$availabilities" :value="$product->availability_id"></x-select>

            <x-select name="unit_id" title="{{ __('products.unit') }}" :options="$units" :value="$product->unit_id"></x-select>

            <x-input name="quantity_in_stock" title="{{ __('products.quantity_in_stock') }}" :value="$product->quantity_in_stock"></x-input>

            <x-input name="moq" title="{{ __('products.moq') }}" :value="$product->moq"></x-input>

            <x-checkbox name="multiply_of_moq_only" title="{{ __('products.multiply_of_moq_only') }}" :value="$product->multiply_of_moq_only"></x-checkbox>

            <x-button class="bg-teal-600 hover:bg-teal-500" wire:click="save">
                {{ __('global.save') }}
            </x-button>
        </div>
    </x-form>
</x-accordion>
