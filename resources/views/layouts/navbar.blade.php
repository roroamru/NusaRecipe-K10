<nav class="navbar bg-light shadow-sm px-4">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LOGO -->
        <a href="/" class="d-flex align-items-center gap-2 text-decoration-none">
            <img src="{{ asset('image/logo.png') }}" style="width:45px;">
            <h4 class="fw-bold text-warning m-0">NusaRecipe</h4>
        </a>

        <!-- SEARCH -->
        <form action="/search" method="GET" class="position-relative">

            <input type="text"
                   name="q"
                   class="form-control"
                   placeholder="Cari resep masakan"
                   style="width:280px; border-radius:25px; padding-right:40px;">

            <button type="submit"
                    style="border:none; background:none; position:absolute; right:10px; top:50%; transform:translateY(-50%);">
                <i class="bi bi-search"></i>
            </button>

        </form>

        <!-- MENU -->
        <div class="d-flex align-items-center gap-4">

            <!-- FAVORIT -->
            <a href="/favorit" style="text-decoration:none;">
                <div class="text-center">
                    <i class="bi bi-bookmark fs-4 text-warning"></i>
                    <div style="font-size:12px;">Favorit</div>
                </div>
            </a>

            <!-- USER -->
            <div id="userArea" class="text-center" style="cursor:pointer;">
                <i class="bi bi-person-circle fs-3 text-warning"></i>
                <div style="font-size:12px;">Akun</div>
            </div>

        </div>

    </div>
</nav>

<!-- SCRIPT  -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    let user = localStorage.getItem("currentUser");
    let userArea = document.getElementById("userArea");

    if (!userArea) return; 

    if (user) {
        // SUDAH LOGIN
        userArea.innerHTML = `
            <div onclick="logout()" style="cursor:pointer;">
                <i class="bi bi-person-check fs-3 text-success"></i>
                <div style="font-size:12px;">Logout</div>
            </div>
        `;
    } else {
        // BELUM LOGIN
        userArea.onclick = function() {
            window.location.href = "/login";
        };
    }

});

// LOGOUT
function logout() {
    localStorage.removeItem("currentUser");
    alert("Logout berhasil!");
    window.location.href = "/";
}
</script>