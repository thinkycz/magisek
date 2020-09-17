<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionFieldToDeliveryPaymentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_methods', function (Blueprint $table) {
            $table->unsignedInteger('position')->default(0);
        });

        Schema::table('payment_methods', function (Blueprint $table) {
            $table->unsignedInteger('position')->default(0);
        });
    }
}
