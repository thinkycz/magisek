<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasSlug;

    protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function orderedItems()
    {
        return $this->hasMany(OrderedItem::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function getPrice(?PriceLevel $priceLevel = null)
    {
        $priceLevel = $priceLevel ?? currentUser()->priceLevel;

        $price = $priceLevel ? $this->prices->where('price_level_id', $priceLevel->id)->first() : null;

        return $price ? $price->convertToCurrency(currentCurrency()) : null;
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

    public function hasPrice(PriceLevel $priceLevel = null)
    {
        return $this->getPrice($priceLevel) ? true : false;
    }

    public function isAvailable()
    {
        return $this->availability->allow_orders;
    }

    public function isInStock()
    {
        return $this->availability->allow_negative_quantity ? true : $this->quantity_in_stock >= $this->minimum_order_quantity;
    }
}
