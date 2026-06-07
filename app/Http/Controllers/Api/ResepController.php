<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resep; 
use Illuminate\Http\Request;

class ResepController extends Controller
{
    // ============================================
    // 1. FUNGSI UNTUK MENGAMBIL DATA (READ)
    // ============================================
    public function index(Request $request)
    {
        $query = Resep::with('kategori');

        if ($request->has('search')) {
            $query->where('nama_resep', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->has('kategori')) {
            $query->whereHas('kategori', function($q) use ($request) {
                $q->where('nama_kategori', $request->kategori);
            });
        }

        $resep = $query->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar resep berhasil diambil',
            'data'    => $resep
        ]);
    }

    // ============================================
    // 2. FUNGSI UNTUK MENYIMPAN DATA (CREATE)
    // ============================================
    public function store(Request $request)
    {
        $namaGambar = 'default-image.png';

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $namaGambar);
        }

        try {
            $resepBaru = new Resep();
            $resepBaru->nama_resep = $request->nama_resep;
            $resepBaru->id_kategori = $request->id_kategori;
            $resepBaru->bahan = $request->bahan;
            $resepBaru->langkah_masak = $request->langkah_masak;
            $resepBaru->gambar = $namaGambar;
            
            // BARIS INI SUDAH DIMATIKAN AGAR TIDAK ERROR
            // $resepBaru->deskripsi = 'Deskripsi belum tersedia'; 
            
            // TITIPKAN DATA WAKTU MEMASAK SEMENTARA DI SINI
            $resepBaru->waktu_memasak = '30 Menit'; 

            // $resepBaru->deskripsi = 'Deskripsi belum tersedia'; 

            $resepBaru->save(); 

            return response()->json([
                'success' => true,
                'message' => 'Resep berhasil ditambahkan!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error database: ' . $e->getMessage()
            ], 500);
        }
    }
}