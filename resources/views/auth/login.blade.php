@extends('layouts.app')

@section('content')

<div class="row" style="height:90vh;">

    <!-- KIRI (BACKGROUND) -->
    <div class="col-md-6 d-none d-md-block"
        style="background:url('{{ asset('image/bg-pattern.jpg') }}') center/cover;">
    </div>

    <!-- KANAN -->
    <div class="col-md-6 d-flex align-items-center justify-content-center">

        <div style="width:70%; text-align:center;">

            <h2 class="text-warning fw-bold mb-4">Masuk Akun</h2>

            <input id="email"
                class="form-control mb-3"
                placeholder="email"
                style="border-radius:30px; background:#f3e19b; padding:12px;">

            <input id="password"
                type="password"
                class="form-control mb-3"
                placeholder="kata sandi"
                style="border-radius:30px; background:#f3e19b; padding:12px;">

            <button onclick="login()"
                class="btn w-100 mb-3"
                style="background:#a6e25c; border-radius:30px;">
                MASUK
            </button>

            <p>
                Belum memiliki akun?
                <a href="/register" class="text-warning fw-bold">
                    Daftar sekarang
                </a>
            </p>

        </div>

    </div>

</div>

<script>
function login() {

    let email = document.getElementById("email").value;

    if (email === "") {
        alert("Isi email dulu!");
        return;
    }

    // SIMPAN USER
    localStorage.setItem("currentUser", email);

    alert("Login berhasil!");
    window.location.href = "/";
}
</script>

@endsection