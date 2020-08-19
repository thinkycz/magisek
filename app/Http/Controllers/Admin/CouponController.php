<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        return view('admin.coupons.index', [
            'coupons' => Coupon::paginate()
        ]);
    }

    public function create()
    {
        return view('admin.coupons.edit', [
            'coupon' => Coupon::make()
        ]);
    }

    public function store(Request $request)
    {
        Coupon::create($this->data($request));

        return redirect()->route('acp.coupons.index');
    }

    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', [
            'coupon' => $coupon
        ]);
    }

    public function update(Coupon $coupon, Request $request)
    {
        $coupon->update($this->data($request));

        return redirect()->route('acp.coupons.index');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        return redirect()->route('acp.coupons.index');
    }

    protected function data(Request $request)
    {
        return $request->validate([
            'code'            => 'required',
            'description'     => 'required',
            'value'           => 'required',
            'times_used'      => 'sometimes|nullable',
            'max_usage'       => 'sometimes|nullable',
            'valid_from'      => 'required',
            'valid_to'        => 'required',
            'enabled'         => 'boolean',
            'once_per_user'   => 'boolean',
            'can_be_combined' => 'boolean',
            'is_percentage'   => 'boolean',
        ]);
    }
}
