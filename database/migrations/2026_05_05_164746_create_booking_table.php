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
        Schema::create('booking', function (Blueprint $table) {
            $table->string('id_booking',10)->primary();
            $table->string('id_user',10);
            $table->string('id_fields',10);
            $table->string('id_payment',10)->nullable();
            $table->dateTime('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_berakhir');
            $table->float('total_harga', 10, 2);
            $table->string('status',15);
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_fields')->references('id_fields')->on('fields');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
