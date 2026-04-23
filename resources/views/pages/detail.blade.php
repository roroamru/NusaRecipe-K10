@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div class="detail-container p-4">

    <!-- BAGIAN ATAS -->
    <div class="row mb-4">

        <!-- GAMBAR -->
        <div class="col-md-5">
            <img src="{{ asset('image/' . $resep['gambar']) }}" class="detail-img">
        </div>

        <!-- INFO -->
        <div class="col-md-7">

            <h2 class="fw-bold mb-3">{{ $resep['nama'] }}</h2>

            <p class="text-muted">
                Resep {{ $resep['nama'] }} yang lezat dan mudah dibuat di rumah.
            </p>

            <p><b>Waktu Masak:</b> 30 menit</p>
            <p><b>Porsi:</b> 2-3 orang</p>

        </div>

    </div>

    <!-- BAGIAN BAWAH -->
    
    <!-- BAHAN -->
    <h4 class="mt-4">Bahan</h4>
    <ul>
        @foreach($resep['bahan'] ?? ['Bahan 1','Bahan 2'] as $b)
            <li>{{ $b }}</li>
        @endforeach
    </ul>

    <!-- LANGKAH -->
    <h4 class="mt-4">Cara Memasak</h4>
    <ol>
        @foreach($resep['langkah'] ?? ['Langkah 1','Langkah 2'] as $l)
            <li>{{ $l }}</li>
        @endforeach
    </ol>

</div>

@endsection