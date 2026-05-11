<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResepController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FavoritController; // Tambahkan baris ini

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

// --- URL UNTUK FAVORIT ---
Route::post('/favorit', [FavoritController::class, 'toggleFavorit']); // Tambahkan baris ini