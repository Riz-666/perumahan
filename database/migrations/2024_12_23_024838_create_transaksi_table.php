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
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_rumah');
            $table->date('tanggal_transaksi');
            $table->decimal('harga_jual', 15, 2);
            $table->enum('metode_pembayaran', ['Tunai', 'Kredit', 'Cicilan']);
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_rumah')->references('id_rumah')->on('properti')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
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
