@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div class="container">

    <!-- KOTAK (JANGAN DITUTUP DI ATAS!) -->
    <div class="bg-white p-4 rounded-4 shadow-sm">

        <!-- ATAS -->
        <div class="row mb-4 align-items-center g-4">

            <!-- GAMBAR -->
            <div class="col-md-5">
                <img src="{{ asset('image/' . $resep['gambar']) }}"
                    class="detail-img w-100"
                    style="border-radius:15px; object-fit:cover;">
            </div>

            <!-- TEKS -->
            <div class="col-md-7">

                <div class="d-flex justify-content-between align-items-start mb-3">

                    <h2 class="fw-bold m-0">
                        {{ $resep['nama'] }}
                    </h2>

                    <i class="bi bi-bookmark bookmark fs-3"
                       onclick="toggleFavorite(event, '{{ $resep['nama'] }}', this)">
                    </i>

                </div>

                <p class="text-muted" style="line-height:1.7;">
                    {{ $resep['deskripsi'] ?? '-' }}
                </p>

                <p class="mb-1">⏱️ <b>{{ $resep['waktu'] }}</b></p>
                <p>🍽️ <b>{{ $resep['porsi'] }}</b></p>

            </div>

        </div>

        <!-- BAHAN (SEKARANG MASUK KOTAK) -->
        <h4 class="mt-4 mb-3">🧂 Bahan</h4>

        @if(isset($resep['bahan']))
            @foreach($resep['bahan'] as $kategori => $items)

                <h6 class="fw-bold text-warning mt-3">
                    {{ is_string($kategori) ? $kategori : '' }}
                </h6>

                <ul>
                    @foreach((array)$items as $item)
                        @if(!empty($item))
                            <li>{{ $item }}</li>
                        @endif
                    @endforeach
                </ul>

            @endforeach
        @endif

        <!-- LANGKAH (JUGA MASUK KOTAK) -->
        <h4 class="mt-4 mb-3">👨‍🍳 Cara Memasak</h4>

        @foreach($resep['langkah'] as $i => $step)

            <div style="display:flex; margin-bottom:10px; align-items:flex-start;">

                <div style="
                    background:orange;
                    color:white;
                    border-radius:50%;
                    width:28px;
                    height:28px;
                    text-align:center;
                    line-height:28px;
                    margin-right:10px;
                    flex-shrink:0;
                ">
                    {{ $i + 1 }}
                </div>

                <div>{{ $step }}</div>

            </div>

        @endforeach

    </div> <!-- ✅ PENUTUP KOTAK DI SINI -->

</div>

@endsection