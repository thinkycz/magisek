<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('code', 255)->unique();
            $table->text('description');
            $table->decimal('value', 11, 2);
            $table->unsignedInteger('times_used')->default(0);
            $table->unsignedInteger('max_usage')->default(0);
            $table->timestamp('valid_from')->nullable();
            $table->timestamp('valid_to')->nullable();
            $table->boolean('enabled')->default(true);
            $table->boolean('once_per_user')->default(true);
            $table->boolean('can_be_combined')->default(false);
            $table->boolean('is_percentage')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
