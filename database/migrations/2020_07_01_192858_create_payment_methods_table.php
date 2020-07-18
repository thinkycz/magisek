<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->json('name');
            $table->decimal('price', 11, 2)->default(0);
            $table->decimal('mov', 11, 2)->default(0)->nullable();
            $table->boolean('price_will_be_calculated')->default(false);
            $table->boolean('enabled')->default(true);
        });

        Schema::create('delivery_payment', function (Blueprint $table) {
            $table->foreignId('delivery_method_id');
            $table->foreignId('payment_method_id');

            $table->primary(['delivery_method_id', 'payment_method_id']);
            $table->foreign('delivery_method_id', 'delivery_id')->references('id')->on('delivery_methods')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('payment_method_id', 'payment_id')->references('id')->on('payment_methods')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_payment');
        Schema::dropIfExists('payment_methods');
    }
}
