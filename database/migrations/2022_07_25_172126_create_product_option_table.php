<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_option', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('option_id')->nullable();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->foreign('option_id')->references('id')->on('options')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_option');
    }
};
