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
        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->string('nama_kategori', 50); // Saya naikkan jadi 50 dari 10, agar nama kategori tidak mudah terpotong
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();

            // Relasi Self-Referencing (Kategori berelasi ke dirinya sendiri)
            $table->foreign('parent_id')->references('id_kategori')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
