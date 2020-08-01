<?php

namespace App\Enums;

use Illuminate\Support\Facades\Session;

abstract class Locale
{
    const CZECH = 'cs';
    const ENGLISH = 'en';
    const VIETNAMESE = 'vi';

    public static function allowed()
    {
        return [
            static::ENGLISH,
            static::CZECH,
//            static::VIETNAMESE,
        ];
    }

    public static function all()
    {
        return collect(static::allowed())
            ->mapWithKeys(function ($locale) {
                return [$locale => static::translation($locale)];
            })
            ->toArray();
    }

    public static function app()
    {
        return config('app.locale', static::fallback());
    }

    public static function translation($locale)
    {
        return trans("global.locale.$locale");
    }

    public static function current()
    {
        return Session::get('lang') ?? static::app();
    }

    public static function fallback()
    {
        return config('app.fallback_locale', Locale::ENGLISH);
    }
}
