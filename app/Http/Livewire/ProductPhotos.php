<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductPhotos extends Component
{
    /**
     * @var Product
     */
    public $product;

    protected $photos;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.product-photos', [
            'photos' => $this->product->fresh()->getMedia('photos')
        ]);
    }

    public function delete($photo)
    {
        $this->product->deleteMedia($photo);
    }
}
