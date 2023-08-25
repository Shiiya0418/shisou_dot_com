<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instruments', function (Blueprint $table) {
            $table->id('instrument_id');
            $table->unsignedBigInteger('shop_id');
            $table->foreign('shop_id')->references('shop_id')->on('shops');
            $table->string('instrument_name');
            $table->integer('price');
            $table->string('instrument_category');
            $table->string('instrument_type');
            $table->integer('fret');
            $table->string('pickups');
            $table->string('comment');
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruments');
    }
};
