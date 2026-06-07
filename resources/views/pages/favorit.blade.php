@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-4 rounded-pill px-4 shadow-sm">
    ← kembali
</a>

<div class="container py-2">
    <h2 class="fw-bold mb-4" style="color:#5c3b00;">Favorit Saya</h2>
    <div id="favoriteList" class="row g-4"></div>
</div>

<script>
// Ambil data resep dari backend (sekarang formatnya object dari database)
let reseps = @json($reseps ?? []);

function loadFavoritPage() {

    // AMBIL USER
    let user = JSON.parse(localStorage.getItem("currentUser"));

    let container = document.getElementById("favoriteList");
    container.innerHTML = "";

    // kalau belum login
    if (!user) {
        container.innerHTML = "<div class='col-12'><p class='text-muted fs-5'>Silakan login untuk melihat favoritmu.</p></div>";
        return;
    }

    // AMBIL FAVORIT SESUAI USER (Berisi array nama_resep)
    let key = "favorit_" + user.email;
    let favs = JSON.parse(localStorage.getItem(key)) || [];

    reseps.forEach((resep) => {

        // Cocokkan nama resep dari database (nama_resep) dengan data di localStorage
        if (favs.includes(resep.nama_resep)) {

            // Link mengarah ke id_resep dari database
            container.innerHTML += `
            <div class="col-12 col-md-4 col-lg-3">
                <a href="/detail/${resep.id_resep}" style="text-decoration:none;">
                    
                    <div style="border:2px solid #f2c06b; border-radius:22px; background:#fffaf1; padding:18px; transition:.3s ease;">
                        <img src="/image/${resep.gambar}" style="width:100%; height:150px; object-fit:cover; border-radius:16px; margin-bottom:15px;">
                        
                        <div class="resep-info">
                            <div class="resep-title" style="color:#d98900; font-size:22px; font-weight:700; line-height:1.3;">
                                ${resep.nama_resep}
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            `;
        }

    });

    if (container.innerHTML === "") {
        container.innerHTML = "<div class='col-12'><p class='text-muted fs-5'>Belum ada resep yang kamu jadikan favorit.</p></div>";
    }
}

document.addEventListener("DOMContentLoaded", loadFavoritPage);
</script>

@endsection