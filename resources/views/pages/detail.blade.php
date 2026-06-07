@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div class="container">

    <div class="bg-white p-4 rounded-4 shadow-sm">

        <div class="row mb-4 align-items-center g-4">

            <div class="col-md-5">
                <img src="{{ asset('image/' . $resep->gambar) }}"
                    class="detail-img w-100"
                    style="border-radius:15px; object-fit:cover;">
            </div>

            <div class="col-md-7">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h2 class="fw-bold m-0">
                        {{ $resep->nama_resep }}
                    </h2>

                    <i class="bi bi-bookmark bookmark fs-3"
                       onclick="toggleFavorite(event, '{{ $resep->nama_resep }}', this)">
                    </i>

                </div>

                <p class="mb-1">⏱️ <b>{{ $resep->waktu_memasak ?? '30 Menit' }}</b></p>
                </div>

        </div>

        <h4 class="mt-4 mb-3">🧂 Bahan</h4>
        
        <pre style="font-family: inherit; font-size: inherit; white-space: pre-wrap; background: #fffaf1; padding: 15px; border-radius: 10px; border: 1px solid #f2c06b;">{{ $resep->bahan }}</pre>

        <h4 class="mt-4 mb-3">👨‍🍳 Cara Memasak</h4>
        
        <pre style="font-family: inherit; font-size: inherit; white-space: pre-wrap; background: #fffaf1; padding: 15px; border-radius: 10px; border: 1px solid #f2c06b;">{{ $resep->langkah_masak }}</pre>

    </div> 

</div>

@endsection