<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Coupon extends Model
{
    protected $guarded = [];

    protected $dates = ['valid_from', 'valid_to'];

    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = Str::of($value)->slug('_')->upper();
    }
}
