<?php

namespace App\Models;

use App\Traits\HasNotes;
use App\Traits\Product\ProductHasAttributes;
use App\Traits\Product\ProductHasEligibilities;
use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model implements Buyable, HasMedia
{
    use Searchable;
    use HasSlug;
    use HasNotes;
    use CanBeBought;
    use InteractsWithMedia;
    use ProductHasEligibilities;
    use ProductHasAttributes;

    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            $this->getKeyName() => $this->getKey(),
            'name'              => $this->name,
            'catalog'           => (string)$this->catalog,
            'barcode'           => (string)$this->barcode,
        ];
    }

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

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(500)
            ->height(300)
            ->watermark(public_path('img/logo.png'))
            ->watermarkOpacity(30)
            ->watermarkWidth(50, Manipulations::UNIT_PERCENT)
            ->watermarkHeight(50, Manipulations::UNIT_PERCENT)
            ->watermarkFit(Manipulations::FIT_CONTAIN)
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->optimize()
            ->keepOriginalImageFormat()
            ->nonQueued();

        $this->addMediaConversion('optimized')
            ->width(800)
            ->height(800)
            ->watermark(public_path('img/logo.png'))
            ->watermarkOpacity(30)
            ->watermarkWidth(50, Manipulations::UNIT_PERCENT)
            ->watermarkHeight(50, Manipulations::UNIT_PERCENT)
            ->watermarkFit(Manipulations::FIT_CONTAIN)
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->optimize()
            ->keepOriginalImageFormat()
            ->nonQueued();
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

    public function addProperty($value, $property_type_id, $is_option = false)
    {
        $property_value_id = PropertyValue::firstOrCreate(compact('value'))->id;

        $this->properties()->firstOrCreate(compact('property_type_id', 'property_value_id'), compact('is_option'));
    }
}
