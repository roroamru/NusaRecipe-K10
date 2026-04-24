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
        Schema::create('favorit', function (Blueprint $table) {
            $table->id('id_favorit'); 
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('resep_id');
            $table->timestamps();

            // Relasi ke tabel User dan Resep
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('resep_id')->references('id_resep')->on('resep')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};
