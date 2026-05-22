<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>

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
                Tambah Resep
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
                    src="{{ asset('image/default-image.png') }}"
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

                    <option value="">
                        Pilih Kategori
                    </option>

                    <option value="makanan">
                        Makanan
                    </option>

                    <option value="minuman">
                        Minuman
                    </option>

                    <option value="cemilan">
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

                    <option>
                        Pilih Sub Kategori
                    </option>

                </select>

            </div>

        </div>

        <!-- BAHAN -->
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
                    "></textarea>

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
                    "></textarea>

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

// preview gambar
function previewImage(event) {

    const image =
        document.getElementById('preview');

    image.src =
        URL.createObjectURL(
            event.target.files[0]
        );
}

// sub kategori otomatis
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

</script>

</body>
</html>