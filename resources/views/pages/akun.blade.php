@extends('layouts.app')

@section('content')

<div class="container py-4">

    <!-- JUDUL -->
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

    <!-- CARD AKUN -->
    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div style="
                background:#ead28f;
                border-radius:40px;
                padding:50px;
                box-shadow:0 8px 20px rgba(0,0,0,.08);
            ">

                <div class="row align-items-center">

                    <!-- FOTO PROFIL -->
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

                        <!-- UPLOAD FOTO -->
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

                    <!-- DATA USER -->
                    <div class="col-md-8">

                        <h2 style="
                            font-weight:700;
                            color:#4b3300;
                            margin-bottom:10px;
                        ">
                            {{ session('user_name') ?? 'Pengguna NusaRecipe' }}
                        </h2>

                        <p style="
                            font-size:18px;
                            color:#555;
                            margin-bottom:35px;
                        ">
                            {{ session('user_email') ?? 'email@gmail.com' }}
                        </p>

                        <!-- BUTTON MENU -->
                        <div class="d-flex flex-column gap-3">

                            <!-- FAVORIT -->
                            <a href="/favorit"
                                class="btn akun-btn">
                                Favorit Saya
                            </a>

                            <!-- LOGIN -->
                            <a href="/login"
                                class="btn akun-btn">
                                Login
                            </a>

                            <!-- LOGOUT -->
                            <button onclick="logout()"
                                class="btn akun-btn">
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


// LOAD FOTO SAAT REFRESH
document.addEventListener("DOMContentLoaded", function () {

    let foto = localStorage.getItem("fotoProfil");

    if (foto) {
        document.getElementById("previewFoto").src = foto;
    }

});


// LOGOUT
function logout() {

    localStorage.removeItem("currentUser");

    alert("Logout berhasil!");

    window.location.href = "/";
}

</script>

@endsection