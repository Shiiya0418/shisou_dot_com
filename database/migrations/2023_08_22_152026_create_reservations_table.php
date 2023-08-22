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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('instrument_id');
            $table->foreign('instrument_id')->references('instrument_id')->on('instruments');
            $table->dateTime('reservation_date');
            $table->string('user_name');
            $table->string('phone_number');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
