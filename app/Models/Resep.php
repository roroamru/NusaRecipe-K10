<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';
    protected $primaryKey = 'id_resep';

    protected $fillable = [
        'nama_resep',
        'bahan',
        'langkah_masak',
        'gambar',
        'waktu_memasak',
        'id_kategori',
    ];

    // Relasi: Resep dimiliki oleh satu Kategori [cite: 184]
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    // Relasi: Resep ada di banyak daftar Favorit [cite: 188]
    public function favorit()
    {
        return $this->hasMany(Favorit::class, 'resep_id', 'id_resep');
    }
}