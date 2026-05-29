@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div style="
        background:#ead28f;
        border-radius:35px;
        padding:25px 40px;
        margin-bottom:40px;
        box-shadow:0 4px 12px rgba(0,0,0,.08);
    ">

        <h1 style="
            margin:0;
            font-size:38px;
            font-weight:700;
            color:#4b3300;
        ">
            Akun Saya
        </h1>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div style="
                background:#ead28f;
                border-radius:40px;
                padding:50px;
                box-shadow:0 8px 20px rgba(0,0,0,.08);
            ">

                <div class="row align-items-center">

                    <div class="col-md-4 text-center mb-4">

                        <img id="previewFoto"
                            src="{{ asset('image/profile.png') }}"
                            style="
                                width:180px;
                                height:180px;
                                border-radius:50%;
                                object-fit:cover;
                                border:6px solid #f5b100;
                                background:white;
                            ">

                        <div class="mt-3">

                            <input type="file"
                                id="uploadFoto"
                                accept="image/*"
                                onchange="previewImage(event)"
                                class="form-control"
                                style="
                                    border-radius:15px;
                                ">

                        </div>

                    </div>

                    <div class="col-md-8">

                        <h2 id="namaUser" style="
                            font-weight:700;
                            color:#4b3300;
                            margin-bottom:10px;
                        ">
                            Pengguna NusaRecipe
                        </h2>

                        <p id="emailUser" style="
                            font-size:18px;
                            color:#555;
                            margin-bottom:35px;
                        ">
                            Tamu (Belum Login)
                        </p>

                        <div class="d-flex flex-column gap-3">

                            <a href="/favorit"
                                class="btn akun-btn">
                                Favorit Saya
                            </a>

                            <a href="/login" id="btnLogin"
                                class="btn akun-btn">
                                Login
                            </a>

                            <button onclick="logout()" id="btnLogout"
                                class="btn akun-btn" style="display: none;">
                                Logout
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<style>

.akun-btn{
    background:#f5b100 !important;
    color:white !important;
    border:none !important;
    border-radius:35px !important;
    padding:14px 35px !important;
    font-weight:600 !important;
    width:220px;
    box-shadow:0 4px 10px rgba(0,0,0,.12);
    transition:.3s ease;
}

.akun-btn:hover{
    transform:translateY(-4px);
    background:#e4a300 !important;
}

</style>

<script>

// PREVIEW FOTO
function previewImage(event) {

    const input = event.target;

    if(input.files && input.files[0]){

        const reader = new FileReader();

        reader.onload = function(e){

            document.getElementById('previewFoto').src = e.target.result;

            // simpan ke localStorage
            localStorage.setItem(
                "fotoProfil",
                e.target.result
            );
        }

        reader.readAsDataURL(input.files[0]);
    }
}


// LOAD FOTO DAN DATA USER SAAT REFRESH
document.addEventListener("DOMContentLoaded", function () {

    // 1. Load Foto
    let foto = localStorage.getItem("fotoProfil");
    if (foto) {
        document.getElementById("previewFoto").src = foto;
    }

    // 2. Load Data User dari Login
    let userStr = localStorage.getItem("currentUser");
    
    let btnLogin = document.getElementById("btnLogin");
    let btnLogout = document.getElementById("btnLogout");
    let namaUser = document.getElementById("namaUser");
    let emailUser = document.getElementById("emailUser");

    if (userStr) {
        // Kalau sudah login, ambil datanya
        let user = JSON.parse(userStr);
        
        // Coba ambil nama (kalau di databasemu ada kolom nama). 
        // Kalau belum ada, kita pakai potongan email depan aja sementara.
        let nama = user.name || user.nama || user.email.split('@')[0];

        // Ganti teks di layar
        namaUser.innerText = nama;
        emailUser.innerText = user.email;

        // Sembunyikan tombol login, tampilkan tombol logout
        btnLogin.style.display = "none";
        btnLogout.style.display = "block";
    } else {
        // Kalau belum login, biarkan default
        btnLogin.style.display = "block";
        btnLogout.style.display = "none";
    }

});


// LOGOUT
function logout() {
    // Hapus sesi login
    localStorage.removeItem("currentUser");
    localStorage.removeItem("token_nusarecipe");
    
    alert("Logout berhasil!");

    window.location.href = "/";
}

</script>

@endsection