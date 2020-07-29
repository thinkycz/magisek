<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $this->data($request)['query'];

        return view('client.search.index', [
            'query'    => $query,
            'products' => Product::search($query)->take(1000)->paginate()
        ]);
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'query' => 'required'
        ]);
    }
}
