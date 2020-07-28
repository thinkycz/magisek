<?php

namespace App\Models;

use App\Traits\ScopeWhereLike;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Unit extends Model
{
    use HasSlug;
    use HasTranslations;
    use ScopeWhereLike;

    public $translatable = ['name', 'abbr'];

    protected $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('code')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
