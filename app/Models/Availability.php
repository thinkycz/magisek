<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Availability extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description'];

    protected $guarded = [];
}