<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->string('id_payment',10)->primary();
            $table->string('id_booking',10);
            $table->string('bukti_pembayaran',50);
            $table->string('status',15);
            $table->foreign('id_booking')->references('id_booking')->on('booking');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
