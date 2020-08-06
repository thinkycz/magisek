<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PriceLevel extends Model
{
    protected $guarded = [];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function getImportCodeAttribute()
    {
        return Str::slug($this->name, '_');
    }
}
