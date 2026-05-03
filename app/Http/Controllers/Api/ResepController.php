<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resep; // Panggil model Resep
use Illuminate\Http\Request;

class ResepController extends Controller
{
    // Fungsi untuk mengambil semua data resep
    public function index(Request $request)
    {
        // 1. Siapkan kerangka pengambilan data (jangan langsung di-get)
        $query = Resep::with('kategori');

        // 2. LOGIKA PENCARIAN (Search)
        // Jika ada permintaan pencarian (contoh: ?search=ayam)
        if ($request->has('search')) {
            $query->where('nama_resep', 'LIKE', '%' . $request->search . '%');
        }

        // 3. LOGIKA FILTER KATEGORI
        // Jika ada filter kategori (contoh: ?kategori=minuman)
        if ($request->has('kategori')) {
            $query->whereHas('kategori', function($q) use ($request) {
                $q->where('nama_kategori', $request->kategori);
            });
        }

        // 4. Eksekusi pengambilan data setelah melewati filter
        $resep = $query->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar resep berhasil diambil',
            'data'    => $resep
        ]);
    }
}