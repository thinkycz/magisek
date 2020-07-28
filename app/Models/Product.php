<?php

namespace App\Models;

use App\Traits\Product\ProductHasEligibilities;
use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model implements Buyable, HasMedia
{
    use HasSlug;
    use CanBeBought;
    use InteractsWithMedia;
    use ProductHasEligibilities;

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

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getPrice(?PriceLevel $priceLevel = null)
    {
        $priceLevel = $priceLevel ?? currentUser()->priceLevel ?? preferenceRepository()->getDefaultPriceLevel();

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

    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

    public function setPrice($price_level_id, $price = null, $old_price = null)
    {
        if (!$price_level_id) return null;

        if (!$price) return $this->prices()->where('price_level_id', $price_level_id)->delete();

        return $this->prices()->updateOrCreate(compact('price_level_id'), [
            'price'     => normalizeNumber($price),
            'old_price' => normalizeNumber($old_price) > normalizeNumber($price) ? normalizeNumber($old_price) : null
        ]);
    }

    public function setPricesAttribute($value)
    {
        if (is_array($value)) {
            foreach ($value as $price) {
                $this->setPrice($price['price_level_id'], $price['price'], $price['old_price']);
            }
        }
    }

    public function addProperty($value, $property_type_id, $is_option = false)
    {
        $property_value_id = PropertyValue::firstOrCreate(compact('value'))->id;

        $this->properties()->firstOrCreate(compact('property_type_id', 'property_value_id'), compact('is_option'));
    }
}
