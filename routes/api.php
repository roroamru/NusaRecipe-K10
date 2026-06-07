<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResepController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FavoritController; 
use App\Http\Controllers\Api\KategoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// --- URL UNTUK AUTENTIKASI (LOGIN & REGISTER) ---
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// --- URL UNTUK RESEP ---
Route::get('/resep', [ResepController::class, 'index']);
Route::get('/resep/{id}', [ResepController::class, 'show']);
// Rute untuk menerima data resep baru
Route::post('/resep/tambah', [ResepController::class, 'store']);

// --- URL UNTUK FAVORIT ---
Route::post('/favorit', [FavoritController::class, 'toggleFavorit']); // Tambahkan baris ini

// --- URL UNTUK KATEGORI ---
Route::get('/kategori', [KategoriController::class, 'index']); // Ambil semua kategori
Route::get('/kategori/{id}/resep', [KategoriController::class, 'resepByKategori']); // Ambil resep khusus kategori tertentu

