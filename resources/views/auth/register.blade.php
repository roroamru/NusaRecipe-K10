@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <div class="row vh-100">

        <!-- KIRI -->
        <div class="col-md-6 d-none d-md-block"
            style="background:url('{{ asset('image/bg-pattern.jpg') }}') center/cover;">
        </div>

        <!-- KANAN -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">

            <div style="width:70%; text-align:center;">

                <h2 style="color:#f57c00; font-weight:bold; margin-bottom:30px;">
                    Daftar Akun
                </h2>

                <form onsubmit="handleRegister(event)">

                    <input type="text" id="nama"
                        class="form-control mb-3"
                        placeholder="nama"
                        required
                        style="border-radius:30px; background:#f3e19b; padding:14px; border:none;">

                    <input type="email" id="email"
                        class="form-control mb-3"
                        placeholder="email"
                        required
                        style="border-radius:30px; background:#f3e19b; padding:14px; border:none;">

                    <input type="password" id="password"
                        class="form-control mb-4"
                        placeholder="kata sandi"
                        required
                        style="border-radius:30px; background:#f3e19b; padding:14px; border:none;">

                    <button class="btn w-100"
                        style="background:#a6e25c; border-radius:30px; padding:12px; font-weight:bold;">
                        DAFTAR
                    </button>

                </form>

                <p class="mt-3">
                    Sudah memiliki akun?
                    <a href="/login" style="color:#f57c00; font-weight:bold;">
                        Masuk
                    </a>
                </p>

            </div>

        </div>

    </div>
</div>

<script>
function handleRegister(e) {
    e.preventDefault();

    let nama = document.getElementById("nama").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let users = JSON.parse(localStorage.getItem("users")) || [];

    let exist = users.find(u => u.email === email);
    if (exist) {
        alert("Email sudah terdaftar!");
        return;
    }

    let userBaru = { nama, email, password };
    users.push(userBaru);

    localStorage.setItem("users", JSON.stringify(users));

    alert("Register berhasil! Silakan login");
    window.location.href = "/login";
}
</script>

@endsection