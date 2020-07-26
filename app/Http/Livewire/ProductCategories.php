<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCategories extends Component
{
    public $name;

    /**
     * @var Product
     */
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-categories', [
            'categories' => $this->name ? Category::whereLike('name', $this->name)->take(6)->get() : $this->product->fresh()->categories
        ]);
    }

    public function toggle($categoryId)
    {
        if (!$this->product->categories->contains($categoryId)) {
            $this->product->categories()->attach($categoryId);
        } else {
            $this->product->categories()->detach($categoryId);
        }
    }
}
