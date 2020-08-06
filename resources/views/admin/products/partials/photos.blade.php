<x-accordion :title="__('products.photos')">
    <div class="p-4">
        <x-filepond name="filepond" :route="route('acp.products.upload-photo', $product)"></x-filepond>

        <livewire:product-photos :product="$product"></livewire:product-photos>
    </div>
</x-accordion>
