<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiscountToOrderedItemsTable extends Migration
{
    public function up()
    {
        Schema::table('ordered_items', function (Blueprint $table) {
            $table->unsignedDecimal('discount')->default(0);
        });
    }
}
