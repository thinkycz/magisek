<?php

if (!function_exists('currentUser')) {
    /**
     * @param bool $optional
     * @return \App\Models\User
     */
    function currentUser($optional = true)
    {
        return $optional ? optional(\App\Models\User::current()) : \App\Models\User::current();
    }
}

if (!function_exists('currentStore')) {
    /**
     * @return \App\Store
     */
    function currentStore()
    {
        return \App\Store::current();
    }
}

if (!function_exists('currentCurrency')) {
    /**
     * @return \App\Models\Currency
     */
    function currentCurrency()
    {
        if ($currency = \Session::has('currency')) {
            return \Session::get('currency');
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
