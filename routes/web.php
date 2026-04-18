<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/detail/{id}', function ($id) {

    $reseps = [
        ["nama" => "Ayam Goreng Krispi", "gambar" => "Ayam-Goreng-Krispi.jpg"],
        ["nama" => "Es Buah", "gambar" => "Es-Buah.jpg"],
        ["nama" => "Gethuk Lindri", "gambar" => "Gethuk-Lindri.jpg"],
        ["nama" => "Klepon", "gambar" => "Klepon.jpg"],
        ["nama" => "Kolak Labu dan Pisang", "gambar" => "Kolak-Labu-dan-Pisang.jpg"],
        ["nama" => "Mie Goreng Jawa", "gambar" => "Mie-Goreng-Jawa.jpg"],
        ["nama" => "Nasi Goreng", "gambar" => "Nasi-Goreng.jpg"],
        ["nama" => "Sop Ala Rumahan", "gambar" => "Sop-Ala-Rumahan.jpg"]
    ];

    $resep = $reseps[$id];

    return view('pages.detail', compact('resep'));

})->name('detail');