@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<div id="favoriteList" class="row"></div>

<script>
let reseps = @json($reseps ?? []);

function loadFavoritPage() {

    // AMBIL USER
    let user = JSON.parse(localStorage.getItem("currentUser"));

    let container = document.getElementById("favoriteList");
    container.innerHTML = "";

    // kalau belum login
    if (!user) {
        container.innerHTML = "<p>Silakan login untuk melihat favorit</p>";
        return;
    }

    // AMBIL FAVORIT SESUAI USER
    let key = "favorit_" + user.email;
    let favs = JSON.parse(localStorage.getItem(key)) || [];

    reseps.forEach((resep, index) => {

        if (favs.includes(resep.nama)) {

            container.innerHTML += `
            <div class="col-md-3 mb-3">
                <a href="/detail/${index}" style="text-decoration:none;">
                    <div class="card-resep">

                        <img src="/image/${resep.gambar}">

                        <div class="resep-info">
                            <div class="resep-title">${resep.nama}</div>
                        </div>

                    </div>
                </a>
            </div>
            `;
        }

    });

    if (container.innerHTML === "") {
        container.innerHTML = "<p>Tidak ada favorit</p>";
    }
}

document.addEventListener("DOMContentLoaded", loadFavoritPage);
</script>

@endsection