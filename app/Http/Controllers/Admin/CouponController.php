<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $data = $request->validate([
            'code'            => ['required', Rule::unique('coupons')->ignore(optional($request->coupon)->id)],
            'description'     => 'required',
            'value'           => 'required',
            'times_used'      => 'sometimes|nullable',
            'max_usage'       => 'numeric|min:0',
            'valid_from'      => 'required|date|before:2038-01-01|before_or_equal:valid_to',
            'valid_to'        => 'required|date|before:2038-01-01|after_or_equal:valid_from',
            'enabled'         => 'boolean',
            'once_per_user'   => 'boolean',
            'can_be_combined' => 'boolean',
            'is_percentage'   => 'boolean',
        ]);


        if ($data['is_percentage']) {
            $request->validate([
                'value' => 'numeric|min:0|max:100'
            ]);
        }

        return $data;
    }
}
