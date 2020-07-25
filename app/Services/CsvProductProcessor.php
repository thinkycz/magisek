<?php

namespace App\Services;

use Illuminate\Support\Collection;

class CsvProductProcessor
{
    public static function transformHeadings(Collection $items, $config)
    {
        $transformations = collect(preg_split('/\r\n|\r|\n/', $config))
            ->mapWithKeys(function ($value) {
                $transformation = collect(explode('>', $value));
                return [$transformation->first() => $transformation->last()];
            });

        return $items->mapWithKeys(function ($value, $key) use ($transformations) {
            return [$transformations->get($key) ?? $key => $value];
        });
    }
}