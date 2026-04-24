<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    protected $table = 'favorit';
    protected $primaryKey = 'id_favorit';

    protected $fillable = [
        'user_id',
        'resep_id',
    ];

    // Relasi: Favorit ini milik User siapa? [cite: 186, 187]
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }

    // Relasi: Favorit ini menyimpan Resep apa? [cite: 188, 189]
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'resep_id', 'id_resep');
    }
}