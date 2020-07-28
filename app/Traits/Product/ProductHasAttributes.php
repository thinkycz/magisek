<?php

namespace App\Traits\Product;

trait ProductHasAttributes
{
    public function getAvailabilityIdAttribute($value)
    {
        return $value ?? preferenceRepository()->getDefaultOutOfStockAvailability()->id;
    }

    public function getUnitIdAttribute($value)
    {
        return $value ?? preferenceRepository()->getDefaultQuantitativeUnit()->id;
    }

    public function getPublicStockQuantityAttribute()
    {
        if ($this->quantity_in_stock > 100) {
            $qty = '> 100';
        } elseif ($this->quantity_in_stock > 50) {
            $qty = '> 50';
        } elseif ($this->quantity_in_stock > 20) {
            $qty = '> 20';
        } elseif ($this->quantity_in_stock > 10) {
            $qty = '> 10';
        } else {
            $qty = $this->quantity_in_stock;
        }

        return $qty;
    }

    public function hasCategory()
    {
        return $this->categories()->count();
    }

    public function getFirstCategory()
    {
        return $this->categories->first();
    }

    public function getShowPathAttribute()
    {
        return route('products.show', $this);
    }

    public function getFormattedVatrateAttribute()
    {
        return str_replace(',00', '', number_format($this->vatrate, 2, ',', ' '));
    }

    public function setMinimumOrderQuantityAttribute($value)
    {
        $this->attributes['minimum_order_quantity'] = is_numeric($value) ? $value : 1;
    }

    public function setVatrateAttribute($value)
    {
        $this->attributes['vatrate'] = is_numeric($value) ? $value : config('config.default_vat_rate_percentage');
    }
}
