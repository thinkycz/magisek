<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaymentMethod extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $guarded = [];

    public function deliveryMethods()
    {
        return $this->belongsToMany(DeliveryMethod::class, 'delivery_payment');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
