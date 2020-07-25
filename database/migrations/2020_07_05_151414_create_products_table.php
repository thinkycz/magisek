<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('slug')->unique();

            $table->text('description')->nullable();
            $table->longText('details')->nullable();

            $table->string('catalog')->nullable();
            $table->string('barcode')->nullable();

            $table->integer('quantity_in_stock')->default(0);
            $table->integer('moq')->default(1);
            $table->unsignedDecimal('vatrate')->default(21.00);
            $table->boolean('enabled')->default(true);
            $table->boolean('multiply_of_moq_only')->default(false);

            $table->foreignId('availability_id')->nullable();
            $table->foreign('availability_id')->references('id')->on('availabilities')->onDelete('set null');

            $table->foreignId('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null');

            $table->nestedSet();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
