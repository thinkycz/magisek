<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $guarded = [];

    public function preferable()
    {
        return $this->morphTo();
    }

    public function getValueAttribute()
    {
        return $this->preferable->name ?? __('global.unknown');
    }

    public function setValueAttribute($value)
    {
        return $this->attributes['preferable_id'] = $value;
    }

    public function getNameAttribute()
    {
        return __("preferences.{$this->code}");
    }
}
