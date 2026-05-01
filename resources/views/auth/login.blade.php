@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <div class="row vh-100">

        <!-- KIRI (PATTERN) -->
        <div class="col-md-6 d-none d-md-block"
            style="background:url('{{ asset('image/bg-pattern.jpg') }}') center/cover;">
        </div>

        <!-- KANAN -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">

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