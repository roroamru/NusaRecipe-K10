@extends('layouts.app')

@section('content')

<h3 class="mb-4">⭐ Resep Favorit</h3>

<div id="favoriteList" class="row"></div>

<script>
let reseps = @json($reseps ?? []);

function loadFavoritPage() {
    let favs = JSON.parse(localStorage.getItem('favorites')) || [];
    let container = document.getElementById("favoriteList");

    container.innerHTML = "";

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
        container.innerHTML = "<p>Tidak ada favorit 😢</p>";
    }
}

document.addEventListener("DOMContentLoaded", loadFavoritPage);
</script>

@endsection