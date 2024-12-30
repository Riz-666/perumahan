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
        Schema::create('properti', function (Blueprint $table) {
            $table->id('id_rumah');
            $table->string('nomor_rumah', 10);
            $table->string('tipe_rumah', 50);
            $table->decimal('luas_bangunan', 10, 2);
            $table->decimal('luas_tanah', 10, 2);
            $table->decimal('harga', 15, 2);
            $table->string('fasilitas');
            $table->string('keterangan_rumah');
            $table->string('foto')->nullable();
            $table->enum('status', ['Tersedia', 'Terjual', 'Booked'])->default('Tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti');
    }
};
