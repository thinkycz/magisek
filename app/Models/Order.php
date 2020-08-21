<?php

namespace App\Models;

use App\Enums\OrderedItemType;
use App\Traits\HasNotes;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Order extends Model
{
    use HasNotes;

    protected $guarded = [];

    protected $dates = [
        'due_date',
        'tax_date'
    ];

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

    public function getRouteKeyName()
    {
        return 'order_number';
    }

    public function getCustomerNameAttribute()
    {
        return $this->user->name ?? 'Guest';
    }

    public function getTotalValueAttribute()
    {
        return $this->orderedItems->sum(function ($item) {
            return $item->total_price;
        });
    }

    public function getFormattedTotalValueAttribute()
    {
        return showPriceWithCurrency($this->total_value, currentCurrency());
    }

    public function getTotalValueExclVatAttribute()
    {
        return $this->orderedItems->sum(function ($item) {
            return $item->total_price_excl_vat;
        });
    }

    public function getFormattedTotalValueExclVatAttribute()
    {
        return showPriceWithCurrency($this->total_value_excl_vat, currentCurrency());
    }

    public function processShippingDetails(Collection $data)
    {
        $shippingDetail = $this->shippingDetail()->create([
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

        $this->update([
            'shipping_detail_id' => $shippingDetail->id
        ]);

        return $this;
    }

    public function processBillingDetails(Collection $data)
    {
        $billingDetail = $this->billingDetail()->create([
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

        $this->update([
            'billing_detail_id' => $billingDetail->id
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

    public function processDeliveryMethod()
    {
        $this->orderedItems()->create([
            'name'     => $this->deliveryMethod->name,
            'price'    => $this->deliveryMethod->price,
            'vatrate'  => 21,
            'quantity' => 1,
            'type'     => OrderedItemType::DELIVERY_METHOD
        ]);

        return $this;
    }

    public function processPaymentMethod()
    {
        $this->orderedItems()->create([
            'name'     => $this->paymentMethod->name,
            'price'    => $this->paymentMethod->price,
            'vatrate'  => 21,
            'quantity' => 1,
            'type'     => OrderedItemType::PAYMENT_METHOD
        ]);

        return $this;
    }
}
