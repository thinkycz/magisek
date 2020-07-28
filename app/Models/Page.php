<?php

namespace App\Models;

use App\Services\Html2Text;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasSlug;

    protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(500)
            ->height(300)
            ->optimize()
            ->keepOriginalImageFormat()
            ->nonQueued();

        $this->addMediaConversion('optimized')
            ->width(800)
            ->height(800)
            ->optimize()
            ->keepOriginalImageFormat()
            ->nonQueued();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getExcerptAttribute()
    {
        return Str::limit(trim((new Html2Text($this->content))->gettext()), 200);
    }

    public function getThumbnailAttribute()
    {
        return $this->getFirstMediaUrl('image', 'thumbnail');
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('image', 'optimized');
    }

    public function setImageAttribute($value)
    {
        if (!$value) return;

        $this->clearMediaCollection('image');
        $this->addMedia($value)->toMediaCollection('image');
    }
}
