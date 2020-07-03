<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_methods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->json('name');
            $table->decimal('price', 11, 2)->default(0);
            $table->decimal('mov', 11, 2)->default(0)->nullable();
            $table->boolean('needs_shipping_address')->default(true);
            $table->boolean('price_will_be_calculated')->default(false);
            $table->boolean('enabled')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_methods');
    }
}
