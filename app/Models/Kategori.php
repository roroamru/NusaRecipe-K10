<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // Nama tabel di database
    protected $primaryKey = 'id_kategori';
    
    protected $fillable = [
        'nama_kategori',
        'parent_id',
    ];

    // Relasi ke Subkategori (Self-Referencing) [cite: 180, 181]
    public function children()
    {
        return $this->hasMany(Kategori::class, 'parent_id', 'id_kategori');
    }

    public function parent()
    {
        return $this->belongsTo(Kategori::class, 'parent_id', 'id_kategori');
    }

    // Relasi: Kategori memiliki banyak Resep [cite: 183]
    public function resep()
    {
        return $this->hasMany(Resep::class, 'id_kategori', 'id_kategori');
    }
}