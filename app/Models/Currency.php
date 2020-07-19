<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Currency extends Model
{
    use HasTranslations;

    public $translatable = ['name'];

    protected $guarded = [];

    public function displayPrice($price)
    {
        if ($this->symbol) {
            $result = $this->symbol_is_before ? "{$this->symbol} {$price}" : "{$price} {$this->symbol}";
        } else {
            $result = "{$price} {$this->isocode}";
        }

        return $result;
    }
}
