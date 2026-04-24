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
        Schema::create('resep', function (Blueprint $table) {
            $table->id('id_resep');
            $table->string('nama_resep', 50);
            $table->text('bahan');
            $table->text('langkah_masak');
            $table->string('gambar', 255)->nullable(); // Dibuat nullable jika gambar boleh kosong saat resep baru dibuat
            $table->string('waktu_memasak', 15);
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();

        // Relasi ke tabel Kategori
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorit');
    }
};
