<?php

namespace App\Models;

use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Coupon extends Model implements Buyable
{
    use CanBeBought;

    protected $guarded = [];

    protected $dates = ['valid_from', 'valid_to'];

    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = Str::of($value)->slug()->upper();
    }

    public function getDiscountAttribute()
    {
        return $this->is_percentage ? '-' . str_replace(',00', '', number_format($this->value, 2, ',', ' ')) . '%' : showPriceWithCurrency($this->value * -1);
    }

    public function getBuyableDescription($options = null)
    {
        return $this->code;
    }

    public function getBuyablePrice($options = null)
    {
        return $this->is_percentage ? 0 : $this->value * -1;
    }
}
