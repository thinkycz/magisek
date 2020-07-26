<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;

class ProductTags extends Component
{
    public $value;

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
        return view('livewire.product-tags', [
            'tags' => $this->product->fresh()->tags
        ]);
    }

    public function attach()
    {
        $value = Str::slug(trim($this->value));

        if (!empty($value)) {
            $tag = Tag::firstOrCreate(['value' => $value]);

            $this->product->tags()->attach($tag);

            $this->value = '';
        }
    }

    public function remove($tagId)
    {
        $this->product->tags()->detach($tagId);
    }
}
