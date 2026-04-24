@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero mb-4">
    <div class="row align-items-center">

        <div class="col-md-7">
            <h2 class="hero-title">
                Temukan resep masakan Nusantara yang mudah, praktis dan lezat.
            </h2>

            <p class="hero-text">
                Jelajahi berbagai resep khas Indonesia dan masak dengan percaya diri dirumahmu.
            </p>
        </div>

        <div class="col-md-5 text-end">
            <img src="{{ asset('image/nasi-kuning.jpg') }}" class="hero-img">
        </div>

    </div>
</div>

<!-- KATEGORI -->
<h5>Kategori Resep</h5>
<div class="mb-4 d-flex gap-2 flex-wrap">
    <button class="kategori-btn active">Makanan</button>
    <button class="kategori-btn">Minuman</button>
    <button class="kategori-btn">Cemilan</button>
</div>

<!-- REKOMENDASI -->
<h5>Rekomendasi Resep</h5>

<div class="row">

    @foreach($reseps as $index => $resep)
    <div class="col-12 col-sm-6 col-lg-3 mb-3">
        <a href="{{ route('detail', $index) }}" style="text-decoration:none;">
            <div class="card-resep">

                <img src="{{ asset('image/' . $resep['gambar']) }}" alt="{{ $resep['nama'] }}">

                <div class="resep-info">
                    <div class="resep-title">{{ $resep['nama'] }}</div>
                </div>

                <i class="bi bi-bookmark bookmark"
                    onclick="toggleFavorite('{{ $resep['nama'] }}', this)"></i>

            </div>
        </a>
    </div>
    @endforeach

</div>

@endsection