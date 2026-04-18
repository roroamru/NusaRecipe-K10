@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero mb-4">
    <div class="row align-items-center">

        <!-- KIRI (TEXT) -->
        <div class="col-md-7">
            <h2 class="hero-title">
                Temukan resep masakan Nusantara yang mudah, praktis dan lezat.
            </h2>

            <p class="hero-text">
                Jelajahi berbagai resep khas Indonesia dan masak dengan percaya diri dirumahmu.
            </p>
        </div>

        <!-- KANAN (GAMBAR) -->
        <div class="col-md-5 text-end">
            <img src="{{ asset('image/nasi-kuning.jpg') }}" class="hero-img">
        </div>

    </div>
</div>

<!-- KATEGORI -->
<h5>Kategori Resep</h5>
<div class="mb-4">
    <button class="kategori-btn">Makanan →</button>
    <button class="kategori-btn">Minuman →</button>
    <button class="kategori-btn">Cemilan →</button>
</div>

<!-- REKOMENDASI -->
<h5>Rekomendasi Resep</h5>

@php
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
@endphp

<div class="row">

    @foreach($reseps as $resep)
    <div class="col-md-3 mb-3">
        <div class="card-resep">

            <!-- GAMBAR -->
            <img src="{{ asset('image/' . $resep['gambar']) }}" alt="{{ $resep['nama'] }}">

            <!-- NAMA -->
            <div class="resep-info">
                <div class="resep-title">{{ $resep['nama'] }}</div>
            </div>

            <!-- ICON -->
            <i class="bi bi-bookmark bookmark"></i>

        </div>
    </div>
    @endforeach

</div>

@endsection