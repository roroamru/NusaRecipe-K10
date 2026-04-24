@extends('layouts.app')

@section('content')

<h4 class="mb-4">
    🔍 Hasil pencarian: "{{ $keyword }}"
</h4>

@if(count($hasil) > 0)

    <div class="list-group">

        @foreach($hasil as $index => $resep)

            <a href="{{ route('detail', $index) }}"
               class="list-group-item list-group-item-action d-flex align-items-center gap-3">

                <img src="{{ asset('image/' . $resep['gambar']) }}"
                     style="width:60px; height:60px; object-fit:cover; border-radius:10px;">

                <div>
                    <div class="fw-bold">{{ $resep['nama'] }}</div>
                    <small class="text-muted">{{ $resep['kategori'] }}</small>
                </div>

            </a>

        @endforeach

    </div>

@else

    <div class="text-center mt-5">
        <h5>❌ Resep tidak ditemukan</h5>
        <p>Coba kata lain</p>
    </div>

@endif

@endsection