<?php

namespace App\Models;

use App\Traits\ScopeWhereLike;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model implements HasMedia
{
    use HasSlug;
    use NodeTrait;
    use InteractsWithMedia;
    use ScopeWhereLike;

    protected $guarded = [];

    public $attributes = [
        'position' => 0,
    ];

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

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function setColorAttribute($value)
    {
        $this->attributes['color'] = $value === '#000000' ? null : $value;
    }
}
