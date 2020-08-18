<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DeliveryMethod extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $guarded = [];

    public function paymentMethods()
    {
        return $this->belongsToMany(PaymentMethod::class, 'delivery_payment');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getFormattedPriceAttribute()
    {
        if ($this->price_will_be_calculated) {
            return __('global.price_will_be_calculated');
        }

        if ($this->price <= 0) {
            return __('global.free');
        }

        return showPriceWithCurrency($this->price);
    }
}
