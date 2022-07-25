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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('category_id')->nullable();
            $table->boolean('active')->default(false);
            $table->string('stock');
            $table->string('slug')->index()->unique();
            $table->string('sku')->nullable();
            $table->string('image')->nullable();
            $table->float('price');
            $table->float('old_price')->nullable();

            $table->json('title');
            $table->json('description')->nullable();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');


            $table->timestamps();
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
};
