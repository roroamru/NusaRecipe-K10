@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-warning mb-3"> ← kembali</a>

<style>
.full-page {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.auth-card {
    width: 80%;
    height: 80vh;
    display: flex;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.auth-left {
    width: 50%;
    background: url('{{ asset('image/gambar.jpg') }}') center/cover;
}

.auth-right {
    width: 50%;
    background: #f8f8f8;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<div class="full-page">

    <div class="auth-card">

        <!-- KIRI -->
        <div class="auth-left"></div>

        <!-- KANAN -->
        <div class="auth-right">

            <div style="width:70%; text-align:center;">

                <h2 style="color:#f57c00; font-weight:bold; margin-bottom:30px;">
                    Masuk Akun
                </h2>

                <input id="email"
                    class="form-control mb-3"
                    placeholder="email"
                    style="border-radius:30px; background:#f3e19b; padding:14px; border:none;">

                <input id="password"
                    type="password"
                    class="form-control mb-4"
                    placeholder="kata sandi"
                    style="border-radius:30px; background:#f3e19b; padding:14px; border:none;">

                <button onclick="login()"
                    class="btn w-100 mb-3"
                    style="background:#a6e25c; border-radius:30px; padding:12px; font-weight:bold;">
                    MASUK
                </button>

                <p>
                    Belum memiliki Akun?
                    <a href="/register" style="color:#f57c00; font-weight:bold;">
                        Daftar sekarang
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>

<script>
function login() {

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Isi semua field!");
        return;
    }

    let users = JSON.parse(localStorage.getItem("users")) || [];

    let user = users.find(u => u.email === email && u.password === password);

    if (user) {
        localStorage.setItem("currentUser", JSON.stringify(user));
        alert("Login berhasil!");
        window.location.href = "/";
    } else {
        alert("Email atau password salah!");
    }
}
</script>

@endsection