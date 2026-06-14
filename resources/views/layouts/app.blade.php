<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NusaRecipe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
        }

        .navbar {
            background: #f5e7b4;
            border-bottom: 2px solid orange;
        }

        .hero {
            background: #f3d88b;
            border-radius: 20px;
            padding: 40px;
        }

        .hero-title {
            font-family: 'Merriweather', serif;
            font-size: 32px;
            font-weight: 700;
        }

        .hero-img {
            width: 250px;
            border-radius: 15px;
        }

        .kategori-btn {
            background: orange;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: bold;
            border: 2px solid black;

            /* tambahan hover */
            transition: all 0.25s ease;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
        }

        /* efek timbul pas disentuh */
        .kategori-btn:hover {
            transform:
                translateY(-6px)
                scale(1.03);

            box-shadow:
                0 10px 22px rgba(0,0,0,0.22);

            background: #ffb400;
            cursor: pointer;
        }

        /* efek ditekan */
        .kategori-btn:active {
            transform:
                translateY(-2px)
                scale(0.98);
        }

        .detail-img {
            height: 280px;
            object-fit: cover;
            border-radius: 15px;
        }

        .card-resep {
            border: 2px solid orange;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 120px;
            background: white;
            transition: 0.3s;
            position: relative;
        }

        .card-resep:hover {
            transform: scale(1.05);
        }

        .card-resep img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
        }

        .resep-title {
            color: orange;
            font-weight: bold;
        }

        .bookmark {
            font-size: 20px;
            color: orange;
            cursor: pointer;
            z-index: 10;
        }

        .bi-bookmark-fill {
            color: orange;
        }

        @media (max-width:768px){
            .hero { text-align:center; }
            .hero-img { width:100%; margin-top:10px; }
        }
    </style>
</head>

<body>

@include('layouts.navbar')

<div class="container mt-4">
    @yield('content')
</div>

@include('layouts.footer')

<!-- SCRIPT FAVORIT -->
<script>
function toggleFavorite(event, nama, el) {

    event.preventDefault();
    event.stopPropagation();

    // ambil user 
    let user = JSON.parse(localStorage.getItem("currentUser"));

    // BELUM LOGIN
    if (!user) {
        alert("Silakan login dulu untuk menyimpan resep favorit!");
        window.location.href = "/login";
        return;
    }

    let key = "favorit_" + user.email;
    let fav = JSON.parse(localStorage.getItem(key)) || [];
    
    // Bikin variabel penanda untuk dikirim ke database
    let aksi = ""; 

    if (fav.includes(nama)) {
        // HAPUS DARI BROWSER
        fav = fav.filter(f => f !== nama);
        el.classList.remove("bi-bookmark-fill");
        el.classList.add("bi-bookmark");
        aksi = "hapus"; // Penanda hapus
    } else {
        // TAMBAH KE BROWSER
        fav.push(nama);
        el.classList.remove("bi-bookmark");
        el.classList.add("bi-bookmark-fill");
        aksi = "tambah"; // Penanda tambah
    }

    // simpan kembali ke browser (biar warnanya langsung berubah)
    localStorage.setItem(key, JSON.stringify(fav));

    // ==========================================
    // KIRIM DATA KE DATABASE (API BACKEND)
    // ==========================================
    fetch('/api/favorit/toggle', { // <-- INI ALAMAT YANG DIBENARKAN
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({
            email: user.email,       // Siapa yang nyimpen
            nama_resep: nama,        // Resep apa yang disimpan
            action: aksi             // Mau ditambah atau dihapus
        })
    })
    .then(response => response.json())
    .then(hasil => {
        console.log("Balasan dari database:", hasil);
        if (!hasil.success) {
            alert("Oops: " + hasil.message);
        }
    })
    .catch(error => {
        console.error('Database belum siap menerima:', error);
    });
}


// LOAD ICON SAAT REFRESH
document.addEventListener("DOMContentLoaded", function () {

    let user = JSON.parse(localStorage.getItem("currentUser"));
    if (!user) return;

    let key = "favorit_" + user.email;
    let fav = JSON.parse(localStorage.getItem(key)) || [];

    document.querySelectorAll(".bookmark").forEach(el => {

        let nama = el.getAttribute("data-nama");

        if (fav.includes(nama)) {
            el.classList.remove("bi-bookmark");
            el.classList.add("bi-bookmark-fill");
        } else {
            el.classList.remove("bi-bookmark-fill");
            el.classList.add("bi-bookmark");
        }

    });

});
</script>