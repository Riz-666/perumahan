<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap transaksi
            $table->unsignedBigInteger('id_user'); // ID pembeli, relasi ke tabel users
            $table->unsignedBigInteger('id_rumah'); // ID properti, relasi ke tabel properties
            $table->string('nama');
            $table->string('tipe_rumah');
            $table->string('pembayaran'); // Metode pembayaran (e.g., 'cash', 'loan', 'credit_card')
            $table->enum('status', ['pending', 'completed', 'canceled', 'failed']); // Status pembayaran
            $table->decimal('harga', 15,2);
            $table->bigInteger('jumlah');
            $table->decimal('total_pembayaran', 15, 2); // Total pembayaran
            $table->timestamp('tanggal_transaksi')->useCurrent(); // Tanggal transaksi
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign keys
            $table->foreign('id_user')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('id_rumah')->references('id_rumah')->on('properti')->onDelete('cascade');
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
