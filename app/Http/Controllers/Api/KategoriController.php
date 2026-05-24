<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pakai DB aja biar sat-set

class KategoriController extends Controller
{
    // Mengambil semua daftar kategori (Makanan, Minuman, Cemilan)
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        
        return response()->json([
            'success' => true,
            'data' => $kategori
        ]);
    }

    // Mengambil resep BERDASARKAN id_kategori tertentu
    public function resepByKategori($id)
    {
        $resep = DB::table('resep')->where('id_kategori', $id)->get();
        
        return response()->json([
            'success' => true,
            'data' => $resep
        ]);
    }
}