<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    public function priceLevel()
    {
        return $this->belongsTo(PriceLevel::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
