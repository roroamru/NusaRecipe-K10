<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Resep</title>

    <script>
        let user = JSON.parse(localStorage.getItem("currentUser"));
        
        if (!user || user.role !== 'admin') {
            alert("Akses Ditolak! Anda bukan Admin.");
            window.location.href = "/";
        }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body style="
    background:#f5f5f5;
    min-height:100vh;
">

<!-- HEADER KUNING -->
<div style="
    background:#f5e3a2;
    padding:20px 40px;
">

    <div class="d-flex justify-content-between align-items-center">

        <!-- KIRI -->
        <div class="d-flex align-items-center gap-4">

            <img src="{{ asset('image/logo.png') }}"
                style="width:70px;">

            <h1 style="
                font-family:serif;
                font-size:55px;
                font-weight:bold;
                margin:0;
            ">
                Kelola Resep
            </h1>

        </div>

        <!-- KANAN -->
        <div class="d-flex align-items-center gap-4">

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
                    width:70px;
                    height:70px;
                    border-radius:50%;
                ">

        </div>

    </div>

</div>

<!-- CONTENT -->
<div class="container py-5">

    <!-- TABLE -->
    <div class="table-responsive">

        <table class="table text-center align-middle"
            style="
                background:white;
                border:2px solid #f2d48f;
            ">

            <thead style="
                background:#f9e7bb;
            ">

                <tr>
                    <th>NO</th>
                    <th>Nama Resep</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>
                @foreach($reseps as $index => $resep)
                <tr>
                    <td>
                        {{ $index + 1 }}
                    </td>
                    <td>
                        {{ $resep->nama_resep }}
                    </td>
                    <td>
                        {{ $resep->nama_kategori ?? 'Belum ada' }}
                    </td>
                    <td>
                        -
                    </td>
                    <td>
                        <a href="/admin/edit/{{ $resep->id_resep }}"
                            style="color:red; text-decoration:none; font-weight:500;">
                            EDIT
                        </a>
            |
                        <a href="/admin/hapus/{{ $resep->id_resep }}"
                            style="color:blue; text-decoration:none; font-weight:500;">
                            HAPUS
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    <!-- BUTTON -->
    <div class="text-end mt-5">

        <a href="/admin/tambah"
            class="btn"
            style="
                background:#f5e3a2;
                border-radius:40px;
                padding:18px 60px;
                font-size:22px;
                color:#2ecc71;
                font-weight:bold;
            ">

            + Menu Baru

        </a>

    </div>

</div>

</body>
</html>