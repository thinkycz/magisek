<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getVatrateAttribute($value)
    {
        return $value ?: config('config.default_vat_rate_percentage');
    }

    public function getPriceExclVatAttribute()
    {
        return getPriceExclVat($this->price, $this->vatrate, currentCurrency());
    }

    public function getFormattedPriceExclVatAttribute()
    {
        return showPriceWithCurrency($this->price_excl_vat, currentCurrency(), __('global.free'));
    }

    public function getTotalPriceExclVatAttribute()
    {
        return $this->quantity * $this->price_excl_vat;
    }

    public function getFormattedTotalPriceExclVatAttribute()
    {
        return showPriceWithCurrency($this->total_price_excl_vat, currentCurrency(), __('global.free'));
    }

    public function getTotalPriceAttribute()
    {
        return $this->quantity * $this->price;
    }

    public function getFormattedTotalPriceAttribute()
    {
        return showPriceWithCurrency($this->total_price, currentCurrency(), __('global.free'));
    }

    public function getFormattedPriceAttribute()
    {
        return showPriceWithCurrency($this->price, currentCurrency(), __('global.free'));
    }

    public function getFormattedDiscountAttribute()
    {
        return showPriceWithCurrency($this->discount, currentCurrency(), __('global.free'));
    }
}
