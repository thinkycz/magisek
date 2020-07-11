<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('locale')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('notes')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreignId('price_level_id')->nullable();
            $table->foreign('price_level_id')->references('id')->on('price_levels')->onDelete('set null');

            $table->foreignId('currency_id')->nullable();
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
