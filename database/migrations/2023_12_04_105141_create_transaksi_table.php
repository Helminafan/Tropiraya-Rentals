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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('fototransaksi');
            $table->boolean('status_transaksi')->default(false);
            $table->boolean('status_pengembalian')->default(false);
            $table->time('waktu_pengembalian')->nullable();
            $table->integer('denda_keterlambatan')->nullable();
            $table->integer('denda_kerusakan')->nullable();
            $table->integer('total_denda')->nullable();
            $table->unsignedBigInteger('id_sewa');
            $table->foreign('id_sewa')->references('id')->on('sewa')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
