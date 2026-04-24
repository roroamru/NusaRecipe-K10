@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div class="detail-container p-4">

    <!-- ATAS -->
    <div class="row mb-4">

        <div class="col-md-5">
            <img src="{{ asset('image/' . $resep['gambar']) }}" class="detail-img">
        </div>

        <div class="col-md-7">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h2 class="fw-bold m-0">{{ $resep['nama'] }}</h2>

                <i class="bi bi-bookmark bookmark fs-3"
                   data-nama="{{ $resep['nama'] }}"
                   onclick="toggleFavorite('{{ $resep['nama'] }}', this)">
                </i>

            </div>

            <p class="text-muted">
                {{ $resep['deskripsi'] ?? '-' }}
            </p>

            <p>⏱️ <b>{{ $resep['waktu'] }}</b></p>
            <p>🍽️ <b>{{ $resep['porsi'] }}</b></p>

        </div>

    </div>

    <!-- BAHAN -->
    <h4 class="mt-4 mb-3">🧂 Bahan</h4>

    @foreach($resep['bahan'] as $kategori => $items)

        <h6 class="fw-bold text-warning mt-3">{{ $kategori }}</h6>

        <ul>
            @foreach($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

    @endforeach

    <!-- LANGKAH -->
    <h4 class="mt-4 mb-3">👨‍🍳 Cara Memasak</h4>

    @foreach($resep['langkah'] as $i => $step)

        <div style="display:flex; margin-bottom:10px;">
            <div style="
                background:orange;
                color:white;
                border-radius:50%;
                width:28px;
                height:28px;
                text-align:center;
                margin-right:10px;
            ">
                {{ $i + 1 }}
            </div>

            <div>{{ $step }}</div>
        </div>

    @endforeach

</div>

@endsection