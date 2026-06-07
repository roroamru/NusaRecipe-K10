@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-4 rounded-pill px-4 shadow-sm">
    ← kembali
</a>

<h4 class="mb-4" style="color:#5c3b00; font-weight:700;">
    🔎 Hasil pencarian: "{{ $keyword }}"
</h4>

@if(count($hasil) > 0)

    <div class="list-group shadow-sm" style="border-radius: 15px; overflow: hidden;">

        @foreach($hasil as $resep)

            <a href="/detail/{{ $resep->id_resep }}"
               class="list-group-item list-group-item-action d-flex align-items-center gap-3"
               style="padding: 15px; border-color: #f2c06b;">

                <img src="{{ asset('image/' . $resep->gambar) }}"
                     style="width:70px; height:70px; object-fit:cover; border-radius:12px;">

                <div>
                    <div class="fw-bold" style="font-size: 18px; color: #d98900;">
                        {{ $resep->nama_resep }}
                    </div>
                </div>

            </a>

        @endforeach

    </div>

@else

    <div class="text-center mt-5 p-5 bg-white shadow-sm" style="border-radius: 20px; border: 2px dashed #f2c06b;">
        <h5 style="color: #d98900; font-weight: bold;">❌ Resep "{{ $keyword }}" tidak ditemukan</h5>
        <p class="text-muted">Coba gunakan kata kunci lain, ya!</p>
    </div>

@endif

@endsection