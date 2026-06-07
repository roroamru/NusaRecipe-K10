@extends('layouts.app')

@section('content')

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

<h5>Kategori Resep</h5>
<div class="mb-4 d-flex gap-2 flex-wrap">
    <a href="/kategori/makanan" class="btn kategori-btn" style="text-decoration: none;">Makanan</a>
    <a href="/kategori/minuman" class="btn kategori-btn" style="text-decoration: none;">Minuman</a>
    <a href="/kategori/cemilan" class="btn kategori-btn" style="text-decoration: none;">Cemilan</a>
</div>

<h5>Rekomendasi Resep</h5>

<div class="row">

    @foreach($reseps as $resep)
    <div class="col-12 col-sm-6 col-lg-3 mb-3">

        <div class="card-resep position-relative">

            <a href="/detail/{{ $resep->id_resep }}"
               style="display:flex; align-items:center; gap:12px; padding:10px; text-decoration:none;">

                <img src="{{ asset('image/' . $resep->gambar) }}"
                     style="width:80px; height:80px; object-fit:cover; border-radius:10px;">

                <div class="resep-info">
                    <div class="resep-title" style="line-height:1.4;">
                        {{ $resep->nama_resep }}
                    </div>
                </div>

            </a>

            <i class="bi bi-bookmark bookmark position-absolute"
               style="right:10px; top:10px;"
               data-nama="{{ $resep->nama_resep }}"
               onclick="toggleFavorite(event, '{{ $resep->nama_resep }}', this)">
            </i>

        </div>

    </div>
    @endforeach

</div>

@endsection