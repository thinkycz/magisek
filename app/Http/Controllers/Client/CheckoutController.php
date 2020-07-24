<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(fn(Request $request, $next) => Cart::count() ? $next($request) : abort(403));
    }

    public function __invoke()
    {
        return view('client.checkout.index');
    }
}
