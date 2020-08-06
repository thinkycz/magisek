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

if (!function_exists('preferenceRepository')) {
    /**
     * @return \App\Repositories\PreferenceRepository
     */
    function preferenceRepository()
    {
        return App::make(\App\Repositories\PreferenceRepository::class);
    }
}

if (!function_exists('settingsRepository')) {
    /**
     * @return \App\Repositories\SettingsRepository
     */
    function settingsRepository()
    {
        return App::make(\App\Repositories\SettingsRepository::class);
    }
}
