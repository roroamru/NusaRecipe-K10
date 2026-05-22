<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resep</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body style="
    background:#f3f3f3;
    min-height:100vh;
    overflow-x:hidden;
">

<!-- HEADER -->
<div style="
    background:#f5e3a2;
    padding:15px 40px;
">

    <div class="d-flex justify-content-between align-items-center">

        <!-- KIRI -->
        <div class="d-flex align-items-center gap-3">

            <img src="{{ asset('image/logo.png') }}"
                style="width:60px;">

            <h1 style="
                font-family:serif;
                font-size:42px;
                font-weight:bold;
                margin:0;
            ">
                Edit Resep
            </h1>

        </div>

        <!-- KANAN -->
        <div class="d-flex align-items-center gap-3">

            <h2 style="
                color:orange;
                font-style:italic;
                font-weight:bold;
                margin:0;
            ">
                Dashboard Admin
            </h2>

            <img src="{{ asset('image/profile.png') }}"
                style="
                    width:60px;
                    height:60px;
                    border-radius:50%;
                    object-fit:cover;
                ">
        </div>

    </div>

</div>

<!-- CONTENT -->
<div class="container py-5">

    <div class="row justify-content-center g-4">

        <!-- GAMBAR -->
        <div class="col-md-3">

            <h2 class="text-center mb-3"
                style="
                    font-family:serif;
                    font-size:34px;
                ">
                Gambar Resep
            </h2>

            <div style="
                background:#f5e3a2;
                border-radius:20px;
                padding:25px;
                text-align:center;
                height:360px;
            ">

                <!-- Preview gambar -->
                <img id="preview"
                    src="{{ asset('image/' . ($resep['gambar'] ?? 'default-image.png')) }}"
                    style="
                        width:220px;
                        height:180px;
                        object-fit:cover;
                    ">

                <br><br>

                <input type="file"
                    id="gambar"
                    class="form-control"
                    accept="image/*"
                    onchange="previewImage(event)">

                <p class="mt-3"
                    style="font-size:18px;">
                    Upload Gambar Resep
                </p>

            </div>

        </div>

        <!-- INFORMASI -->
        <div class="col-md-3">

            <div style="
                background:#b8f04b;
                border-radius:30px;
                padding:30px;
                height:430px;
            ">

                <h1 class="text-center mb-4"
                    style="
                        font-family:serif;
                        font-size:34px;
                    ">
                    Informasi Resep
                </h1>

                <label>Nama Resep</label>

                <input type="text"
                    class="form-control mb-3"
                    value="{{ $resep['nama'] ?? '' }}"
                    style="
                        border-radius:10px;
                        height:50px;
                    ">

                <label>Kategori</label>

                <select id="kategori"
                    class="form-select mb-3"
                    onchange="ubahSubKategori()"
                    style="
                        border-radius:10px;
                        height:50px;
                    ">

                    <option value="makanan"
                        {{ ($resep['kategori'] ?? '') == 'makanan' ? 'selected' : '' }}>
                        Makanan
                    </option>

                    <option value="minuman"
                        {{ ($resep['kategori'] ?? '') == 'minuman' ? 'selected' : '' }}>
                        Minuman
                    </option>

                    <option value="cemilan"
                        {{ ($resep['kategori'] ?? '') == 'cemilan' ? 'selected' : '' }}>
                        Cemilan
                    </option>

                </select>

                <label>Sub Kategori</label>

                <select id="subkategori"
                    class="form-select"
                    style="
                        border-radius:10px;
                        height:50px;
                    ">
                    <option selected>
                        {{ $resep['subkategori'] ?? 'Pilih Sub Kategori' }}
                    </option>
                </select>

            </div>

        </div>

        <!-- BAHAN & LANGKAH -->
        <div class="col-md-3">

            <div style="
                background:#b8f04b;
                border-radius:30px;
                padding:30px;
                height:430px;
            ">

                <h2 class="text-center mb-3"
                    style="
                        font-family:serif;
                        font-size:30px;
                    ">
                    Bahan - Bahan
                </h2>

                <textarea
                    class="form-control mb-3"
                    rows="5"
                    style="
                        border:2px solid black;
                        resize:none;
                        height:110px;
                    ">@if(isset($resep['bahan']))
@foreach($resep['bahan'] as $kategori => $items)
@foreach($items as $item)
• {{ $item }}
@endforeach
@endforeach
@endif</textarea>

                <h2 class="text-center mb-3"
                    style="
                        font-family:serif;
                        font-size:30px;
                    ">
                    Langkah - Langkah
                </h2>

                <textarea
                    class="form-control"
                    rows="5"
                    style="
                        border:2px solid black;
                        resize:none;
                        height:110px;
                    ">@if(isset($resep['langkah']))
@foreach($resep['langkah'] as $i => $step)
{{ $i + 1 }}. {{ $step }}
@endforeach
@endif</textarea>

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
                padding:12px 50px;
                font-size:24px;
                width:170px;
            ">
            Batal
        </a>

        <button class="btn"
            style="
                background:#f5e3a2;
                border-radius:40px;
                padding:12px 50px;
                font-size:24px;
                width:170px;
            ">
            Simpan
        </button>

    </div>

</div>

<script>

// Preview gambar
function previewImage(event) {

    const image =
        document.getElementById('preview');

    image.src =
        URL.createObjectURL(
            event.target.files[0]
        );
}

// Sub kategori otomatis
function ubahSubKategori() {

    const kategori =
        document.getElementById('kategori').value;

    const sub =
        document.getElementById('subkategori');

    sub.innerHTML = '';

    if(kategori === 'makanan') {

        sub.innerHTML = `
            <option>Kuah</option>
            <option>Tidak Kuah</option>
        `;
    }

    else if(kategori === 'minuman') {

        sub.innerHTML = `
            <option>Dingin</option>
            <option>Hangat</option>
        `;
    }

    else if(kategori === 'cemilan') {

        sub.innerHTML = `
            <option>Tidak Ada</option>
        `;
    }
}

window.onload = ubahSubKategori;

</script>

</body>
</html>