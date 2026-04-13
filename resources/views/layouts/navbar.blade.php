<nav class="navbar navbar-light bg-light shadow-sm px-4">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- LOGO + NAMA -->
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" width="45">
            <h4 class="fw-bold m-0 text-warning">NusaRecipe</h4>
        </div>

        <!-- SEARCH -->
        <div class="d-flex align-items-center position-relative">
            <input type="text"
                   class="form-control shadow-sm"
                   placeholder="Cari resep masakan"
                   style="width:300px; border-radius:25px; padding-left:20px;">

            <i class="bi bi-search position-absolute"
               style="right:15px;"></i>
        </div>

        <!-- MENU KANAN -->
        <div class="d-flex align-items-center gap-4">

            <div class="text-center">
                <i class="bi bi-bookmark fs-4 text-warning"></i>
                <div style="font-size:12px;">Favorit</div>
            </div>

            <i class="bi bi-person-circle fs-3 text-warning"></i>

        </div>

    </div>
</nav>