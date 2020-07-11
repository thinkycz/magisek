<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model
{
    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
