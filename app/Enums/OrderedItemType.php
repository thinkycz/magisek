<?php

namespace App\Enums;

abstract class OrderedItemType
{
    const COUPON = 'COUPON';
    const PRODUCT = 'PRODUCT';
    const CUSTOM = 'CUSTOM';
    const PAYMENT_METHOD = 'PAYMENT_METHOD';
    const DELIVERY_METHOD = 'DELIVERY_METHOD';

    public static function allowed()
    {
        return [
            static::COUPON,
            static::PRODUCT,
            static::CUSTOM,
            static::PAYMENT_METHOD,
            static::DELIVERY_METHOD,
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

    public static function translation($type)
    {
        return trans("global.ordered_item_type.$type");
    }
}
