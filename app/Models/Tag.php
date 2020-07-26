<?php

namespace App\Models;

use App\Traits\ScopeWhereLike;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use ScopeWhereLike;

    protected $guarded = [];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = trim($value);
    }
}
