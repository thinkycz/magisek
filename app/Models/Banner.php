<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Banner extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->width(1200)
            ->height(500)
            ->optimize()
            ->keepOriginalImageFormat()
            ->nonQueued();
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
