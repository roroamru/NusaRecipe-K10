<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Beritahu Laravel kalau primary key-nya adalah id_user
     * sesuai dengan desain ERD NusaRecipe.
     */
    protected $primaryKey = 'id_user';

    /**
     * Atribut yang dapat diisi secara massal.
     * Nama kolom disesuaikan dengan bahasa Indonesia (nama, email, role).
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];

    /**
     * Atribut yang harus disembunyikan saat data dikirim (untuk keamanan).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Pengaturan tipe data otomatis (casting).
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi: Satu User dapat memiliki banyak resep favorit.
     * Ini menghubungkan id_user ke kolom user_id di tabel favorit.
     */
    public function favorit()
    {
        return $this->hasMany(Favorit::class, 'user_id', 'id_user');
    }
}