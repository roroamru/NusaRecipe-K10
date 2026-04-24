<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resep; // Panggil model Resep
use Illuminate\Http\Request;

class ResepController extends Controller
{
    // Fungsi untuk mengambil semua data resep
    public function index()
    {
        // Ambil semua data resep beserta nama kategorinya
        $resep = Resep::with('kategori')->get();

        // Ubah data menjadi format JSON untuk dikirim ke Frontend
        return response()->json([
            'success' => true,
            'message' => 'Daftar resep berhasil diambil',
            'data'    => $resep
        ]);
    }
}