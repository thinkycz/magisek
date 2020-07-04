<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Setting extends Model
{
    protected $guarded = [];

    protected $casts = [
        'schema' => 'array',
        'data'   => 'array',
    ];

    public function getNameAttribute()
    {
        $namespace = $this->namespace ? "{$this->namespace}::" : '';

        $key = "{$namespace}settings.{$this->code}";

        return \Lang::has($key) ? __($key) : str_replace('_', ' ', Str::title($this->code));
    }

    public function getValueAttribute()
    {
        return $this->data['value'] ?? __('settings.object');
    }
}