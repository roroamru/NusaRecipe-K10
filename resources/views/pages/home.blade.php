@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero mb-4">
    <div class="row align-items-center">

        <div class="col-md-7">
            <h2 class="hero-title">
                Temukan resep masakan Nusantara yang mudah, praktis, dan lezat.
            </h2>

            <p class="hero-text">
                Jelajahi berbagai resep khas Indonesia dan masak dengan percaya diri di rumahmu.
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
    <button class="kategori-btn">Makanan</button>
    <button class="kategori-btn">Minuman</button>
    <button class="kategori-btn">Cemilan</button>
</div>

<!-- REKOMENDASI -->
<h5>Rekomendasi Resep</h5>

<div class="row">

    @foreach($reseps as $index => $resep)
    <div class="col-12 col-sm-6 col-lg-3 mb-3">

        <!-- CARD -->
        <div class="card-resep position-relative">

            <a href="{{ route('detail', $index) }}"
               style="display:flex; align-items:center; gap:12px; padding:10px; text-decoration:none;">

                <!-- GAMBAR -->
                <img src="{{ asset('image/' . $resep['gambar']) }}"
                     style="width:80px; height:80px; object-fit:cover; border-radius:10px;">

                <!-- TEKS -->
                <div class="resep-info">
                    <div class="resep-title" style="line-height:1.4;">
                        {{ $resep['nama'] }}
                    </div>
                </div>

            </a>

            <!-- FAVORIT -->
            <i class="bi bi-bookmark bookmark position-absolute"
               style="right:10px; top:10px;"
               data-nama="{{ $resep['nama'] }}"
               onclick="toggleFavorite(event, '{{ $resep['nama'] }}', this)">
            </i>

        </div>

    </div>
    @endforeach

</div>

@endsection