<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $value;

    public function mount(Request $request)
    {
        $this->value = $request->get('query');
    }

    public function render()
    {
        return view('livewire.search-dropdown', [
            'products' => Product::search($this->value)->take(6)->get()
        ]);
    }
}
