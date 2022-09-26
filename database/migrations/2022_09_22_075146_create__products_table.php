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
        Schema::create('_products', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('description',255);
            $table->integer('price');
            $table->string('image');
            $table->string('weight');
            $table->integer('available');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->integer('quantity')->nullable();
            $table->timestamps();
        });

        Schema::rename('_products', 'products');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_products');
    }
};
