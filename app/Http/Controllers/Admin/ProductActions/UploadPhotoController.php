<?php

namespace App\Http\Controllers\Admin\ProductActions;

use App\Models\Product;
use Illuminate\Http\Request;

class UploadPhotoController
{
    public function __invoke(Product $product, Request $request)
    {
        $product->addMediaFromRequest('filepond')->toMediaCollection('photos');

        return response()->json();
    }
}
