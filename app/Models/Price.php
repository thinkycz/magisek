<?php

namespace App\Models;

use App\Enums\CurrencyConversionMethod;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    public function priceLevel()
    {
        return $this->belongsTo(PriceLevel::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function convertToCurrency(Currency $currency)
    {
        return static::make(array_merge($this->attributes, [
            'old_price' => $this->convertPriceValue($this->old_price, $currency),
            'price' => $this->convertPriceValue($this->price, $currency),
            'currency_id' => $currency->id,
        ]));
    }

    protected function convertPriceValue($price, Currency $currency)
    {
        return $price / $currency->exchange_rate;
    }

    public static function withCurrency($price, Currency $currency, string $whenNull = null)
    {
        if (!$price) {
            return !is_null($whenNull) ? $whenNull : trans('global.no_price');
        }

        $currency = $currency ?: preferenceRepository()->getDefaultCurrency();

        $formattedPrice = str_replace(',00', '', number_format($price, 2, ',', ' '));

        return $currency->display($formattedPrice);
    }
}
