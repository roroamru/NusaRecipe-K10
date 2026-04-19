@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div class="detail-container p-4">

    <div class="row">

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

            <!-- BAHAN -->
            <h5 class="mt-4">Bahan:</h5>
            <ul>
                @foreach($resep['bahan'] ?? ['Bahan 1','Bahan 2'] as $b)
                    <li>{{ $b }}</li>
                @endforeach
            </ul>

            <!-- LANGKAH -->
            <h5 class="mt-3">Cara Memasak:</h5>
            <ol>
                @foreach($resep['langkah'] ?? ['Langkah 1','Langkah 2'] as $l)
                    <li>{{ $l }}</li>
                @endforeach
            </ol>

        </div>

    </div>

</div>

@endsection