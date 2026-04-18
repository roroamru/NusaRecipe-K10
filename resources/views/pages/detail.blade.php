@extends('layouts.app')

@section('content')

<div class="card p-4">

    <h2 class="fw-bold mb-3">{{ $resep['nama'] }}</h2>

    <img src="{{ asset('image/' . $resep['gambar']) }}" 
        class="detail-img">

    <h5 class="mt-4">Deskripsi</h5>
    <p>Resep {{ $resep['nama'] }} yang lezat dan mudah dibuat di rumah.</p>

    <h5 class="mt-3">Bahan:</h5>
    <ul>
        <li>Bahan 1</li>
        <li>Bahan 2</li>
        <li>Bahan 3</li>
    </ul>

    <h5 class="mt-3">Cara Memasak:</h5>
    <ol>
        <li>Langkah pertama</li>
        <li>Langkah kedua</li>
        <li>Langkah ketiga</li>
    </ol>

</div>

@endsection