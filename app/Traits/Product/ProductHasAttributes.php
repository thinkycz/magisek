<?php

namespace App\Traits\Product;

trait ProductHasAttributes
{
    public function getThumbnailAttribute()
    {
        return $this->hasMedia('photos') ? $this->getFirstMediaUrl('photos', 'thumbnail') : asset('img/no_image.jpg');
    }

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

    public function getPriceAttribute()
    {
        return optional($this->getPrice())->price;
    }

    public function getFormattedPriceAttribute()
    {
        return showPriceWithCurrency($this->price, currentCurrency());
    }

    public function getPriceExclVatAttribute()
    {
        return getPriceExclVat($this->price, $this->vatrate, currentCurrency());
    }

    public function getFormattedPriceExclVatAttribute()
    {
        return showPriceWithCurrency($this->price_excl_vat, currentCurrency());
    }

    public function getPurchasableAttribute()
    {
        return $this->hasPrice() && $this->isAvailable() && $this->isInStock();
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

    public function setPricesAttribute($value)
    {
        if (is_array($value)) {
            foreach ($value as $price) {
                $this->setPrice($price['price_level_id'], $price['price'], $price['old_price']);
            }
        }
    }
}
