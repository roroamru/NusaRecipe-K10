<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritController extends Controller
{
    public function toggleFavorit(Request $request)
    {
        // 1. Tangkap kiriman teks dari frontend
        $email = $request->input('email');
        $nama_resep = $request->input('nama_resep');
        $action = $request->input('action');

        if (!$email || !$nama_resep) {
            return response()->json(['success' => false, 'message' => 'Data tidak lengkap!']);
        }

        // 2. Terjemahkan Teks menjadi Angka ID (Sesuai tabelmu)
        // Cari id dari tabel users
        $user = DB::table('users')->where('email', $email)->first();
        // Cari id_resep dari tabel resep
        $resep = DB::table('resep')->where('nama_resep', $nama_resep)->first();

        // Kalau user atau resep belum ada di master data, hentikan
        if (!$user || !$resep) {
            return response()->json([
                'success' => false, 
                'message' => 'Gagal: Email atau Resep belum ada di database utama.'
            ]);
        }

        $userId = $user->id_user; // ID milik user
        $resepId = $resep->id_resep; // ID milik resep (berdasarkan fotomu sebelumnya)

        // 3. Proses Simpan / Hapus ke tabel favorit pakai angka ID
        if ($action === 'tambah') {
            $cekData = DB::table('favorit')
                ->where('user_id', $userId)
                ->where('resep_id', $resepId)
                ->first();

            if (!$cekData) {
                DB::table('favorit')->insert([
                    'user_id' => $userId,
                    'resep_id' => $resepId,
                    'created_at' => now(), // Karena di tabelmu ada kolom created_at
                    'updated_at' => now()
                ]);
            }

            return response()->json(['success' => true, 'message' => 'Mantap, masuk ke database!']);
        } 
        
        elseif ($action === 'hapus') {
            DB::table('favorit')
                ->where('user_id', $userId)
                ->where('resep_id', $resepId)
                ->delete();

            return response()->json(['success' => true, 'message' => 'Dihapus dari database!']);
        }

        return response()->json(['success' => false, 'message' => 'Aksi tidak dikenali']);
    }
}