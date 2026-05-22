@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 style="
            font-family:serif;
            font-size:55px;
            font-weight:bold;
        ">
            Tambah Resep
        </h1>

        <h2 style="
            color:orange;
            font-style:italic;
            font-weight:bold;
        ">
            Dashboard Admin
        </h2>

    </div>

    <div class="row justify-content-center g-4">

        <!-- GAMBAR -->
        <div class="col-md-3">

            <h2 class="text-center mb-4"
                style="font-family:serif;">
                Gambar Resep
            </h2>

            <div style="
                background:#f5e3a2;
                padding:35px;
                text-align:center;
                border-radius:10px;
            ">

                <img src="{{ asset('image/default-image.png') }}"
                    style="
                        width:220px;
                        height:220px;
                        object-fit:cover;
                    ">

                <p class="mt-4 mb-0"
                    style="font-size:25px;">
                    Upload Gambar Resep
                </p>

            </div>

        </div>

        <!-- INFORMASI -->
        <div class="col-md-3">

            <div style="
                background:#b9f55d;
                border-radius:30px;
                padding:35px;
            ">

                <h1 class="text-center mb-4"
                    style="font-family:serif;">
                    Informasi Resep
                </h1>

                <label>Nama Resep</label>

                <input type="text"
                    class="form-control mb-4"
                    style="
                        border-radius:12px;
                        height:65px;
                    ">

                <label>Kategori</label>

                <select class="form-select mb-4"
                    style="
                        border-radius:12px;
                        height:65px;
                    ">
                    <option>Pilih Kategori</option>
                    <option>Makanan</option>
                    <option>Minuman</option>
                    <option>Cemilan</option>
                </select>

                <label>Sub Kategori</label>

                <select class="form-select"
                    style="
                        border-radius:12px;
                        height:65px;
                    ">
                    <option>Pilih Sub Kategori</option>
                    <option>Kuah</option>
                    <option>Tidak Berkuah</option>
                </select>

            </div>

        </div>

        <!-- BAHAN & LANGKAH -->
        <div class="col-md-3">

            <div style="
                background:#b9f55d;
                border-radius:30px;
                padding:35px;
            ">

                <h2 class="text-center mb-4"
                    style="font-family:serif;">
                    Bahan - Bahan
                </h2>

                <textarea class="form-control mb-4"
                    rows="5"
                    placeholder="• Ayam&#10;• Tepung&#10;• Minyak"></textarea>

                <h2 class="text-center mb-4"
                    style="font-family:serif;">
                    Langkah - Langkah
                </h2>

                <textarea class="form-control"
                    rows="5"
                    placeholder="1. Langkah pertama"></textarea>

            </div>

        </div>

    </div>

    <!-- BUTTON -->
    <div class="text-center mt-5">

        <a href="/admin"
            class="btn me-3"
            style="
                background:#f5e3a2;
                border-radius:40px;
                padding:15px 50px;
                font-size:25px;
            ">
            Batal
        </a>

        <button class="btn"
            style="
                background:#f5e3a2;
                border-radius:40px;
                padding:15px 50px;
                font-size:25px;
            ">
            Simpan
        </button>

    </div>

</div>

@endsection