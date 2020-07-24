<?php

namespace App\Models;

use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function shippingDetail()
    {
        return $this->belongsTo(ShippingDetail::class);
    }

    public function billingDetail()
    {
        return $this->belongsTo(BillingDetail::class);
    }

    public function deliveryMethod()
    {
        return $this->belongsTo(DeliveryMethod::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function orderedItems()
    {
        return $this->hasMany(OrderedItem::class);
    }

    public function processShippingDetails(Collection $data)
    {
        $this->shippingDetail()->create([
            'company_name' => $data->get('shipping_company_name'),
            'first_name'   => $data->get('shipping_first_name'),
            'last_name'    => $data->get('shipping_last_name'),
            'street'       => $data->get('shipping_street'),
            'city'         => $data->get('shipping_city'),
            'zipcode'      => $data->get('shipping_zipcode'),
            'country_id'   => $data->get('shipping_country_id'),
            'phone'        => $data->get('phone'),
            'user_id'      => $data->get('user_id'),
        ]);

        return $this;
    }

    public function processBillingDetails(Collection $data)
    {
        $this->billingDetail()->create([
            'company_name' => $data->get('billing_company_name'),
            'first_name'   => $data->get('billing_first_name'),
            'last_name'    => $data->get('billing_last_name'),
            'street'       => $data->get('billing_street'),
            'city'         => $data->get('billing_city'),
            'zipcode'      => $data->get('billing_zipcode'),
            'country_id'   => $data->get('billing_country_id'),
            'phone'        => $data->get('phone'),
            'company_id'   => $data->get('company_id'),
            'vat_id'       => $data->get('vat_id'),
            'user_id'      => $data->get('user_id'),
        ]);

        return $this;
    }

    public function processBasketItems()
    {
        Cart::content()->each(function (CartItem $cartItem) {
            $this->orderedItems()->create([
                'name'       => $cartItem->name,
                'price'      => $cartItem->priceTax,
                'vatrate'    => $cartItem->taxRate,
                'quantity'   => $cartItem->qty,
                'product_id' => $cartItem->id
            ]);
        });

        return $this;
    }
}
