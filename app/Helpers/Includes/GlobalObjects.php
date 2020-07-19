<?php

use App\Models\Currency;
use App\Models\User;
use Illuminate\Support\Facades\Session;

if (!function_exists('currentUser')) {
    /**
     * @param bool $optional
     * @return User
     */
    function currentUser($optional = true)
    {
        return $optional ? optional(auth()->user()) : auth()->user();
    }
}

if (!function_exists('currentCurrency')) {
    /**
     * @return Currency
     */
    function currentCurrency()
    {
        if ($currency = Session::has('currency')) {
            return Session::get('currency');
        }

        if ($currency = currentUser()->currency) {
            return $currency;
        }

        return preferenceRepository()->getDefaultCurrency();
    }
}

/*
 * @return \App\Repositories\PreferenceRepository
 */
if (!function_exists('preferenceRepository')) {
    function preferenceRepository()
    {
        return App::make(\App\Repositories\PreferenceRepository::class);
    }
}

/*
 * @return \App\Repositories\SettingsRepository
 */
if (!function_exists('settingsRepository')) {
    function settingsRepository()
    {
        return App::make(\App\Repositories\SettingsRepository::class);
    }
}
