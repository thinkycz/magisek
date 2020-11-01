<div class="flex-1 flex flex-col space-y-8">
    @forelse($categories as $category)
        <x-product-slider :name="$category->name" :products="$category->products()->inRandomOrder()->take(6)->get()" :link="route('categories.show', $category)"></x-product-slider>
    @empty
        <x-product-slider :name="__('global.newest_products')" :products="App\Models\Product::latest()->take('6')->get()"></x-product-slider>
    @endforelse
</div>

