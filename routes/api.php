<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResepController;
use App\Http\Controllers\Api\AuthController; // Tambahan untuk memanggil AuthController

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// --- URL UNTUK AUTENTIKASI (LOGIN & REGISTER) ---
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// --- URL UNTUK RESEP ---
// URL untuk mengambil daftar resep (List)
Route::get('/resep', [ResepController::class, 'index']);

// URL untuk mengambil detail satu resep (Detail)
Route::get('/resep/{id}', [ResepController::class, 'show']);