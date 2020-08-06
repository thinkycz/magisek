<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'schema' => 'array',
        'data'   => 'array',
    ];

    public function getNameAttribute()
    {
        $namespace = $this->namespace ? "{$this->namespace}::" : '';

        return __("{$namespace}settings.{$this->code}");
    }

    public function getValueAttribute()
    {
        return $this->data['value'] ?? __('settings.object');
    }

    public function setDataAttribute($data)
    {
        foreach ($this->schema['properties'] as $name => $property) {
            if ($property['type'] == 'image') {
                if (isset($data[$name])) {
                    $media = $this->addMedia($data[$name])->toMediaCollection($name);
                    $data[$name] = $media->getUrl();
                }
            } elseif ($property['type'] == 'number') {
                $data[$name] = floatval($data[$name]);
            } elseif ($property['type'] == 'string') {
                $data[$name] = trim($data[$name]);
            }
        }

        $data = $this->data ? array_merge($this->data, $data) : $data;

        $this->attributes['data'] = json_encode($data);
    }

    public static function loadConfiguration(string $code)
    {
        $setting = static::where('code', $code)->first();

        return optional($setting)->data;
    }

    public static function saveConfiguration(string $code, array $data, string $namespace = '', string $type = 'string')
    {
        $schema = [
            'type'       => 'object',
            'properties' => collect($data)->keys()->mapWithKeys(function ($value) use ($type) {
                return [$value => compact('type')];
            }),
        ];

        return static::updateOrCreate(compact('namespace', 'code'), compact('schema', 'data'));
    }
}
